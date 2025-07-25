<?php

namespace App\Actions;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class CompressImageAction
{
    protected string|null $type = null;
    protected Post|null $post = null;
    protected bool $isPreviewImg = false;
    protected string $originalFileName = '';

    const IMAGE_FORMATS = [
        ['format' => '.jpg', 'mimetype' => 'image/jpeg'],
        ['format' => '.webp', 'mimetype' => 'image/webp']
    ];

    public function execute(UploadedFile $file, string $type, int $post_id)
    {
        $this->type = $type;
        $this->isPreviewImg = $this->type === Image::PREVIEW_TYPE;

        if (isset($post_id)) {
            $this->post = Post::find($post_id);
        }

        if ($this->isPreviewImg) {
            $this->savePreviewImages($file);
        } elseif ($this->type === Image::TEXT_TYPE) {
            $this->saveTextImages($file);
        } else {
            $this->saveQuoteImages($file);
        }
    }

    protected function savePreviewImages(UploadedFile $file)
    {
        $imageParameters = [
            ['width' => 840, 'height' => 450, 'suffix' => '-sm@2x'],
            ['width' => 420, 'height' => 220, 'suffix' => '-sm'],
        ];

        $imagesToSave = $this->saveImagesInStore($imageParameters, $file);

        $this->saveImagesInDB($imagesToSave, $this->originalFileName . '-sm');
    }

    protected function saveTextImages(UploadedFile $file)
    {
        $widthOfBigImgFile = max($file->dimensions()[0], 2224);
        $heightOfImgFile = $file->dimensions()[1];

        $imageParameters = [
            ['width' => $widthOfBigImgFile, 'height' => $heightOfImgFile, 'suffix' => '@2x'],
            ['width' => $widthOfBigImgFile / 2, 'height' => $heightOfImgFile / 2],
        ];

        $imagesToSave = $this->saveImagesInStore($imageParameters, $file);

        $this->saveImagesInDB($imagesToSave);
    }

    protected function saveQuoteImages(UploadedFile $file)
    {
        $imageParameters = [
            ['width' => 160, 'height' => 160, 'suffix' => '@2x'],
            ['width' => 80, 'height' => 80],
        ];

        $imagesToSave = $this->saveImagesInStore($imageParameters, $file);

        $this->saveImagesInDB($imagesToSave);
    }


    protected function saveImagesInStore(array $imageParameters, UploadedFile $file)
    {
        $this->originalFileName = $this->getOrignalFileName($file);
        $originalImage = ImageManager::imagick()->read($file);

        foreach ($imageParameters as $imgParam) {
            $resizedImg = $originalImage->resize($imgParam['width'], $imgParam['height']);
            $imgNameSuffix = $imgParam['suffix'] ?? '';

            foreach (self::IMAGE_FORMATS as $imgFormat) {
                $imgFileToSave = $resizedImg->encodeByMediaType($imgFormat['mimetype'], quality: 80);
                $imgFileName = $this->originalFileName . $imgNameSuffix . $imgFormat['format'];

                Storage::disk('public')->put('images/' . $imgFileName, $imgFileToSave);

                $imagesToSave[] = [
                    'src' => $imgFileName,
                    'type' => $this->type,
                    'post_id' => $this->post?->id ?? null,
                    'name' => $this->originalFileName
                ];
            }
        }

        return $imagesToSave;
    }

    protected function getOrignalFileName(UploadedFile $file)
    {
        return pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
    }

    protected function saveImagesInDB(array $imagesToSave, ?string $postPreviewImageName = null)
    {
        if ($this->post && $this->isPreviewImg) {
            $this->post->preview_image_name = $postPreviewImageName;
            $this->post->save();
        }

        Image::insert($imagesToSave);
    }
}

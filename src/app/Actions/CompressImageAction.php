<?php

namespace App\Actions;

use App\Models\Image;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class CompressImageAction
{
    protected string|null $type = null;
    protected Product|null $product = null;
    protected bool $isPreviewImg = false;
    protected string $originalFileName = '';

    const IMAGE_FORMATS = [
        ['format' => '.jpg', 'mimetype' => 'image/jpeg'],
        ['format' => '.webp', 'mimetype' => 'image/webp']
    ];

    public function execute(UploadedFile $file, string $type, int $product_id)
    {
        $this->type = $type;
        $this->isPreviewImg = $this->type === ProductImage::PREVIEW_TYPE;

        if (isset($product_id)) {
            $this->product = Product::find($product_id);
        }

        if ($this->isPreviewImg) {
            $this->savePreviewImages($file);
        } elseif ($this->type === ProductImage::TEXT_TYPE) {
            $this->saveTextImages($file);
        }
    }

    protected function savePreviewImages(UploadedFile $file)
    {
        $originalWidth = $file->dimensions()[0];
        $originalHeight = $file->dimensions()[1];
        $maxWidth = 420;

        $newWidth = $maxWidth;
        $newHeight = ($originalHeight * $maxWidth) / $originalWidth;

        $imageParameters = [
            [
                'width' => $newWidth,
                'height' => $newHeight,
                'suffix' => '-sm@2x',
            ],
            [
                'width' => $newWidth / 2,
                'height' => $newHeight / 2,
                'suffix' => '-sm'
            ]
        ];

        $imageToSaveInDB = $this->saveImagesInStore($imageParameters, $file);

        $this->saveImagesInDB($imageToSaveInDB, $this->originalFileName . '-sm');
    }

    protected function saveTextImages(UploadedFile $file)
    {
        $originalWidth = $file->dimensions()[0];
        $originalHeight = $file->dimensions()[1];
        $maxWidth = 840;

        $newWidth = $maxWidth;
        $newHeight = ($originalHeight * $maxWidth) / $originalWidth;

        $imageParameters = [
            ['width' => $newWidth, 'height' => $newHeight, 'suffix' => '@2x'],
            ['width' => $newWidth / 2, 'height' => $newHeight / 2],
        ];

        $this->saveImagesInStore($imageParameters, $file);
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

                Storage::disk('public')->put('/images/products/' . $imgFileName, $imgFileToSave);
            }
        }

        return [
            'name' => $this->originalFileName,
            'type' => $this->type,
            'product_id' => $this->product?->id ?? null,
        ];
    }

    protected function getOrignalFileName(UploadedFile $file)
    {
        return pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
    }

    protected function saveImagesInDB(array $imageToSaveInDB, ?string $postPreviewImageName = null)
    {
        ProductImage::insert($imageToSaveInDB);
    }
}

<?php

namespace App\Console\Commands;

use App\Models\ProductImage;
use Illuminate\Console\Command;
use App\Actions\CompressImageAction;
use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CompressProductImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:compress-product-images {--type=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Сжатие всех изображений продуктов';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $type = $this->option('type');

        foreach (ProductImage::where('type', ProductImage::TEXT_TYPE)->get() as $productImage) {
            // Получаем оригинальное имя файла без расширения
            $originalName = $productImage->getRawOriginal('name');

            // Проверяем разные расширения файлов
            $extensions = ['.jpg', '.jpeg', '.png', '.webp'];
            $foundFile = null;
            $foundExtension = null;

            foreach ($extensions as $ext) {
                $isFileExists = Storage::disk('public')->exists('/images/products-initial/' . $originalName . $ext);

                if ($isFileExists) {
                    $foundFile = Storage::disk('public')->path('/images/products-initial/' . $originalName . $ext);
                    $foundExtension = $ext;
                    break;
                }
            }
            if ($foundFile) {
                // Создаем UploadedFile из существующего файла
                $uploadedFile = new UploadedFile(
                    $foundFile,
                    $originalName . $foundExtension,
                    mime_content_type($foundFile),
                    null,
                    true
                );

                (new CompressImageAction())->execute($uploadedFile, $type, $productImage->product_id);

                $this->info("Изображение {$originalName}{$foundExtension} обработано");
            } else {
                $this->error("Файл {$originalName} не найден (проверены расширения: " . implode(', ', $extensions) . ")");
            }
        }

        $this->info('Все изображения обработаны');
    }
}

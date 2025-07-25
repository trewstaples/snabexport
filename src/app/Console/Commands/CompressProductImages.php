<?php

namespace App\Console\Commands;

use App\Models\ProductImage;
use Illuminate\Console\Command;
use App\Actions\CompressImageAction;
use Illuminate\Container\Attributes\Storage;

class CompressProductImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:compress-product-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (ProductImage::all() as $productImage) {
            (new CompressImageAction())->execute(new UploadedFile($productImage->name, $productImage->name), 'product', $productImage->product_id);
        }
    }
}

<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class StoreProductJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $productData;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $productData)
    {
        $this->productData = $productData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $productData = $this->productData;

        $imagePath = $productData['imagePath']; // Use the image path from the data

        $product = new Product([
            'name' => $productData['name'],
            'description' => $productData['description'],
            'price' => $productData['price'],
            'image' => $imagePath,
        ]);

        $product->save();
    }
}

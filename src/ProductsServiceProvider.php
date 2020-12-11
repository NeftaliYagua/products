<?php

namespace LaravelSchema\Products;

use Illuminate\Support\ServiceProvider;

class ProductsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/products.php' => config_path('products.php'),
        ]);
    }
    public function register()
    {
        
    }
}
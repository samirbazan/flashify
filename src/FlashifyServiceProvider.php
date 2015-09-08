<?php

namespace InStore\Flashify;

use Illuminate\Support\ServiceProvider;

class FlashifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/flashify'),
            __DIR__.'/css' => base_path('public/css'),
            __DIR__.'/js' => base_path('public/js'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

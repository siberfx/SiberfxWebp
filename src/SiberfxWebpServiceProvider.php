<?php

namespace Siberfx\SiberfxWebp;

use Illuminate\Support\ServiceProvider;

class SiberfxWebpServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config-webp.php' => config_path('config-webp.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('webp', function () {
            return new SiberfxWebp();
        });
    }
}

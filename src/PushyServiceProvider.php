<?php

namespace Akk7300\Pushy;

use Illuminate\Support\ServiceProvider;


class PushyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('pushy.php'),
            ], 'config');

        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'pushy');

        $this->app->bind('pushy', function () {
            return new Pushy();
        });

    }
}

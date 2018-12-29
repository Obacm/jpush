<?php

namespace JPush;

use Illuminate\Support\ServiceProvider;

class JPushServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/jpush.php' => config_path('jpush.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/../config/jpush.php', 'jpush');
    }
}
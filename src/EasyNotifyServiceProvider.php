<?php

namespace EasyNotify;

use Illuminate\Support\ServiceProvider;
use EasyNotify\Builders\NotifyBuilder;

class EasyNotifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('easy-notify', function () {
            return new NotifyBuilder();
        });

        $this->publishes([
            __DIR__.'/../config/easy-notify.php' => config_path('easy-notify.php'),
        ], 'config');
    }
}

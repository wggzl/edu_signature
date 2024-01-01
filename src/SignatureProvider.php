<?php
namespace Edu\Signature;

use Closure;
use Illuminate\Support\ServiceProvider;

class SignatureProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/edu.php', 'edu'
        );


        $this->app->bind('edu.signature', function () {
            return new User();
        });
    }

    public function boot()
    {
        //生成配置文件，php artisan vendor:publish
        $this->publishes([
            __DIR__ . '/../config/edu.php' => config_path('edu.php')
        ]);
        //生成路由
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }
}

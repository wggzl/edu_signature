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
        $this->publishes([
            __DIR__ . '/../config/edu.php' => config_path('edu.php')
        ]);
    }
}

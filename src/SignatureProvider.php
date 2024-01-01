<?php
namespace Edu\Signature;

use Closure;
use Illuminate\Support\ServiceProvider;

class SignatureProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('edu.signature', function () {
            return new User();
        });
    }

    public function booted(Closure $callback)
    {
    }
}

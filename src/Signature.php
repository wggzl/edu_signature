<?php

namespace Edu\Signature;

use Illuminate\Support\Facades\Facade;

class Signature extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'edu.signature';
    }
}

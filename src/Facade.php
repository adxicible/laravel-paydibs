<?php

namespace Paydibs;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return Paydibs::class;
    }
}

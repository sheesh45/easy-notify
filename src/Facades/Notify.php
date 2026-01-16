<?php

namespace EasyNotify\Facades;

use Illuminate\Support\Facades\Facade;

class Notify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'easy-notify';
    }
}

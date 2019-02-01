<?php

namespace Siberfx\SiberfxWebp\Facades;

use Illuminate\Support\Facades\Facade;

class SiberfxWebp extends Facade
{

    /**
     * Return facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'webp';
    }
}

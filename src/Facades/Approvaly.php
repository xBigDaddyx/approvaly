<?php

namespace Xbigdaddyx\Approvaly\Facades;

use Illuminate\Support\Facades\Facade;

class Approvaly extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'approvaly';
    }
}

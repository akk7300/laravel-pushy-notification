<?php

namespace Akk7300\Pushy\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akk7300\Pushy\Skeleton\SkeletonClass
 */
class Pushy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pushy';
    }
}

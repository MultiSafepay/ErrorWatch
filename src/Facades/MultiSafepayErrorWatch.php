<?php

namespace MultiSafepayErrorWatch\MultiSafepayErrorWatch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MultiSafepayErrorWatch\MultiSafepayErrorWatch\MultiSafepayErrorWatch
 */
class MultiSafepayErrorWatch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MultiSafepayErrorWatch\MultiSafepayErrorWatch\MultiSafepayErrorWatch::class;
    }
}

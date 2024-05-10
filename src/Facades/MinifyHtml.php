<?php

namespace Vormkracht10\MinifyHtml\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vormkracht10\MinifyHtml\MinifyHtml
 */
class MinifyHtml extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Vormkracht10\MinifyHtml\MinifyHtml::class;
    }
}

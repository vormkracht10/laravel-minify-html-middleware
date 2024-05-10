<?php

namespace Vormkracht10\HtmlMinify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vormkracht10\HtmlMinify\HtmlMinify
 */
class HtmlMinify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Vormkracht10\HtmlMinify\HtmlMinify::class;
    }
}

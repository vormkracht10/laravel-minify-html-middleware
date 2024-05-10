<?php

namespace Vormkracht10\MinifyHtml;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vormkracht10\MinifyHtml\Commands\MinifyHtmlCommand;

class MinifyHtmlServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-minify-html-middleware')
            ->hasConfigFile('minify-html');
    }
}

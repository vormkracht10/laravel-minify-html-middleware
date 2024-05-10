<?php

namespace Vormkracht10\HtmlMinify;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vormkracht10\HtmlMinify\Commands\HtmlMinifyCommand;

class HtmlMinifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-html-minify-middleware')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-html-minify-middleware_table')
            ->hasCommand(HtmlMinifyCommand::class);
    }
}

<?php

namespace Vormkracht10\HtmlMinify\Commands;

use Illuminate\Console\Command;

class HtmlMinifyCommand extends Command
{
    public $signature = 'laravel-html-minify-middleware';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

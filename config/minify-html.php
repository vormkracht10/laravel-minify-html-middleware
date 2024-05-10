<?php

return [
    'enabled' => env('MINIFY_HTML', env('APP_ENV') === 'production'),

    'transformers' => [
        RemoveComments::class,
        RemoveWhitespace::class,
    ],
];

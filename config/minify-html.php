<?php

return [
    'transformers' => [
        \Vormkracht10\MinifyHtml\Transformers\RemoveComments::class,
        \Vormkracht10\MinifyHtml\Transformers\RemoveWhitespace::class,
        \Vormkracht10\MinifyHtml\Transformers\TrimScripts::class,
    ],
];

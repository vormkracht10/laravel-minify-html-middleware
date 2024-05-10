<?php

namespace Vormkracht10\MinifyHtml\Transformers;

class RemoveComments
{
    public function transform(string $html): string
    {
        return preg_replace('~<!--[^]><!\[](?!Livewire|ko |/ko)(.*?)[^]]-->~s', '', $html);
    }
}

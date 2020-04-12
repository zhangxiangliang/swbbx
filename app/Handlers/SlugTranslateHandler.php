<?php

namespace App\Handlers;

use GuzzleHttp\Client;
use Overtrue\Pinyin\Pinyin;
use Illuminate\Support\Str;

class SlugTranslateHandler
{
    public function translate($text)
    {
        return Str::slug(app(Pinyin::class)->permalink($text));
    }
}

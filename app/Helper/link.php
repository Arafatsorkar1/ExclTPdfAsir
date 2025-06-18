<?php

namespace App\Helper;

use Illuminate\Support\Str;

class link
{
    public static function generateShortUrl($length = 8)
    {
        return Str::random($length);
    }
}
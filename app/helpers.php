<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('route_class')) {
    /**
     * 获取当前路由类名
     * @return string
     */
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}

if (!function_exists('make_excerpt')) {
    /**
     * 获取内容摘要
     * @param string $value 摘要
     * @param string $length 长度限制
     * @return string
     */
    function make_excerpt($value, $length = 200)
    {
        $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
        return Str::limit($excerpt, $length);
    }
}

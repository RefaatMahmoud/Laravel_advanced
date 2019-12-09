<?php

namespace App\Services;

class PostCardFacade
{
    public static function resolveFacade($name)
    {
        return app()->make($name);
    }

    public static function __callStatic($name, $arguments)
    {
        return (self::resolveFacade('PostCardFacade'))->$name(...$arguments);
    }

}

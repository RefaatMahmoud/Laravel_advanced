<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;


class PostCardService
{
    private $width;
    private $height;
    private $count;

    public function __construct($width, $height, $count)
    {
        $this->width = $width;
        $this->height = $height;
        $this->count = $count;
    }

    public function hello($name)
    {
        dd('Hello Mr '. $name . ' From PostCardService');
    }
}

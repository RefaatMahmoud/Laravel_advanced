<?php

namespace App\Http\Controllers;

use App\Services\PostCardFacade;
use App\Services\PostCardService;

class PostCardController extends Controller
{
    public function postCard()
    {
        $post_card = new PostCardService(2, 2, 10);
        $post_card->hello('Refaat');
    }

    public function postCardWithFacade()
    {
        //dd(app()->make('PostCardFacade'));
        PostCardFacade::hello('Ahmed');
    }
}

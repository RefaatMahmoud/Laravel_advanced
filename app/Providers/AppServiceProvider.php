<?php

namespace App\Providers;

use App\Services\PostCardService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //PostCardFacade is Alias
        $this->app->singleton('PostCardFacade', function ($app) {
                return new PostCardService(1, 1, 10);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

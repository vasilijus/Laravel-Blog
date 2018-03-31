<?php

namespace App\Providers;
use App\Billing\Stripe;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('layouts.sidebar', function($view){
            $view->with('archives', \App\Post::archives() );
            $view->with('tags', \App\Tag::has('posts')->pluck('name') );

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->singleton(Stripe::class, function () {
            return new Stripe(config('services.stripe.secret'));
        });

    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['store.partials.navigation','store.category','admin.productIndex','admin.productCreate','admin.productEdit'], 'App\Http\ViewComposers\NavigationComposer@category');
        View::composer(['store.partials.navigation','store.cart','store.checkout'], 'App\Http\ViewComposers\NavigationComposer@cart');
        View::composer(['store.partials.navigation','admin.newsIndex','admin.newsCreate','admin.newsEdit'], 'App\Http\ViewComposers\NavigationComposer@newsCategory');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

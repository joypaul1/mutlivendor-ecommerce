<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SiteInfo;
use App\Models\Slider;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('*', function ($view) {
            if (!session()->has('info')) {
                session()->put('info', SiteInfo::find(1));
            }

            if (!session()->has('slider')) {
                session()->put('slider',
                Slider::dataDesc('position')->
                get(['image','position', 'short_desc', 'offer_desc', 'color', 'link']));
            }
            // dd( Category::dataDesc('position')->get());
            // if (!session()->has('categories')) {
            //     session()->put('categories',
            //     Category::DataDesc('position')->get());
            // }

            view()->share('info', session()->get('info'));

            if ($view->getName() == 'backend.partials._footer') {
                session()->forget('info');
            }
        });
    }
}

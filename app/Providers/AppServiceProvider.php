<?php

namespace App\Providers;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


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

        View::composer(['front.includes.header'], function ($view){
            $view->with('categories', Category::where('status',1)->get());
        });

        View::composer(['front.blog.category-blog'],function ($view){
            $view->with('categories', Category::where('status',1)->get());
        });
    }
}

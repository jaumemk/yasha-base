<?php

namespace App\Providers;

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
        if(env('MYSQL_LEGACY', false))
        {
            // Because of our mySQL version we need this fix
            // https://laravel-news.com/laravel-5-4-key-too-long-error   

            \Illuminate\Support\Facades\Schema::defaultStringLength(191);
        }
    }
}

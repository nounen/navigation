<?php

namespace App\Providers;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // https://stackoverflow.com/questions/23786359/laravel-migration-unique-key-is-too-long-even-if-specified
        Schema::defaultStringLength(191);

        if (App::environment('local')) {
            DB::connection()->enableQueryLog();
        }
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

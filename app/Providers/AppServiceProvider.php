<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

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
        // Schema::defaultStringLength(250);

        // Blade::if('admin', function(){
        //     return Auth::check() && Auth::user()->isAdministrator();
        // });

        // Blade::if('selfforadmin', function($id){
        //     return Auth::check() && (Auth::user()->isAdministrator() || Auth::user()->id ==$id);
        // });
    }
}

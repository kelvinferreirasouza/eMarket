<?php

namespace App\Providers;

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

        // envia para a view o nome da rota para ser utilizada no menu como active
        view()->composer('*', function ($view) {

        $current_route_name = \Request::route()->getName();

        $view->with('current_route_name', $current_route_name);

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
    }
}

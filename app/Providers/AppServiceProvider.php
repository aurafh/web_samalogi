<?php

namespace App\Providers;

use App\Models\MenuItem;
use App\Models\Portfolio;
use Illuminate\Pagination\Paginator;
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
        $menu=MenuItem::all();
        view()->share('menu', $menu);

        Paginator::useBootstrap();
    }
}

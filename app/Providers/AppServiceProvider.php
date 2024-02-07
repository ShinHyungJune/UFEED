<?php

namespace App\Providers;

use App\Models\Device;
use Illuminate\Support\Facades\View;
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

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer("*", function($view){
            $devices = Device::get();

            $view->with([
                "devices" => $devices
            ]);
        });
    }
}

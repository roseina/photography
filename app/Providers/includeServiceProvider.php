<?php

namespace App\Providers;
use App\Page;
use App\Setting;
use App\Event;

use Illuminate\Support\ServiceProvider;

class includeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.includes.socialbar', function ($view) {
          /*** For websettings ***/
           
           $setting=Setting::first();
           
           return $view->with(compact('setting'));
      });

        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

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
        view()->composer('frontend.partials.header', function ($view) {
          /*** For headermenus ***/

          $menus=Page::where('status','active')->get();

          return $view->with(compact('menus'));
      });

        view()->composer('frontend.partials.footer', function ($view) {
          /*** For footermenus***/

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

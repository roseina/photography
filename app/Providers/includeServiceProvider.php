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
        view()->composer('frontend.header', function ($view) {
          /*** For Menu ***/
           $pages=Page::where('status','Active')->orderBy('id', 'asc')->take(5)->get();
           
           $setting=Setting::first();
           
           return $view->with(compact('pages','setting'));
      });

        view()->composer('frontend.footer',function($view)
            {
                
                $setting=Setting::first();
                $events=Event::all();
                 return $view->with(compact('setting','events'));
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

<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Homecomponent;
// use App\Event;
use App\GalleryImage;
use App\Page;
use App\Setting;

class FrontendController extends Controller
{

    public function index()
    {
      
      $webSetting=Setting::first();
      
  return view('frontend.home',compact('webSetting'));
    }
   
}

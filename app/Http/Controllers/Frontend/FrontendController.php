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
      $homecomponent=Homecomponent::where('status','Active')->get();
      return view('frontend.home',compact('homecomponent'));
  }

  public function client()
  {
   return view('frontend.client');
}
public function page($slug)
{
	$data=Page::where('slug',$slug)->first();
	return view('frontend.page',$data);
}

public function bookonline()
{
   dd(2);
}

}

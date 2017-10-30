<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Homecomponent;
// use App\Event;
use App\GalleryImage;
use App\Page;

class FrontendController extends Controller
{

    public function index()
    {
        $bannerData=Banner::all();
        $homeComponent=Homecomponent::all();
        $aboutus=Page::where([['page_title','About'],['slug','/about-us']])->first();
        $pageData=Page::where([['page_title','Home'],['slug','/home']])->first();
        return view('frontend.home',compact('bannerData','homeComponent','aboutus','pageData'));
    }
    public function about()
    {
       $images=GalleryImage::where('gallery_id',1)->where('status','Active')->get();
        $pageData=Page::where([['page_title','About'],['slug','/about-us']])->first();
        return view('frontend.aboutus',compact('pageData','images'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function gallery()
    {
        $pageData=Page::where([['page_title','Gallery'],['slug','/gallery']])->first();
        return view('frontend.gallery',compact('pageData'));
    }

    public function events()
    {
     $pageData=Page::where([['page_title','Events'],['slug','/events']])->first();
     return view('frontend.events',compact($pageData));
 }
}

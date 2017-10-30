@extends('frontend.master')
@section('content')


        
    <!--begin about-hero-section -->
   <section id="hero-section" class="about-hero-section" style=@if(!empty($pageData->banner_image))@if($pageData->banner_image!=null && file_exists(public_path('uploads/pages/banner/'.$pageData->banner_image))) "background: url({{URL::asset('uploads/pages/banner/'.$pageData->banner_image) }}) 50% top no-repeat fixed; @endif @endif>

   
   

    
        <!--begin image-overlay -->
        <div class="image-overlay"></div>
        <!--end image-overlay -->
            
        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
        <div class="row">

        <!--begin col-md-10-->
        <div class="col-md-10 col-md-offset-1 text-center">

            <span class="comic-text wow fadeIn" data-wow-delay="0.5s">@if(!empty($pageData->page_title)){{ $pageData->page_title}} @endif</span>

            {{--  <h2 class="section-title white wow bounceIn" data-wow-delay="1s">Friendly Team</h2> --}}

            <p class="hero-text wow fadeInUp" data-wow-delay="2s">@if(!empty($pageData->short_desc)){{ $pageData->short_desc }}@endif</p>

        </div>
        <!--end col-md-10-->
        
    </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </section>
    <!--end about-hero-section -->
    
    <!--begin section-grey-->
   <section class="section-grey">

  <!--begin container-->
  <div class="container"> 

    <!--begin row-->
    <div class="row">

        <!--begin col-md-6-->

        <div class="col-md-6 wow slideInLeft">
            @if ($pageData->image != '' && file_exists(public_path() . '/uploads/pages/images/' . $pageData->image))               
            <img src="{{ URL::to('uploads/pages/images/' . $pageData->image) }}" alt="picture" class="width-100">
            @endif

        </div>
        <!--end col-md-6-->

        <!--begin col-md-6-->
        <div class="col-md-6 text-center padding-top-40 padding-bottom-40 wow slideInRight">

            <span class="comic-text">Delights</span>

            <h2 class="section-title">About Us</h2>

            <p>@if(!empty($pageData->long_description)){{ strip_tags($pageData->long_description)}} @endif</p>

        {{-- <a href="#" class="btn btn-lg btn-yellow scrool">OUR RECEIPES</a>
        --}}
    </div>
    <!--end col-md-6-->

</div>
<!--end row-->

</div>
<!--end container-->

</section>
    <!--end section-grey-->
    
    <!-- begin revolutions slider -->
    @if($images!=null)
    <div id="rev_slider_30_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="media-carousel-autoplay30" style="margin:0px auto;background-color:#fff;padding:0px;margin-top:0px;margin-bottom:0px;">
        
        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        <div id="rev_slider_30_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            
            <ul>	
                
                <!-- SLIDE  -->
                @foreach($images as $i)
                <li data-index="rs-122" data-transition="fade" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-rotate="0"  data-saveperformance="off"  data-title="Real Webdesign" data-param1="Regular Image" data-description="">
                	
                    <!-- MAIN IMAGE -->
                	@if ($i->image != '' && file_exists(public_path('uploads/gallery/images/')  . $i->image))    
                <img src="{{ URL::to('uploads/gallery/images/' . $i->image) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                @endif
                    
                </li>
                @endforeach
                
                
            </ul>
            
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
            
        </div>
        
    </div>
    @endif
    <!-- end revolutions slider -->
    
    <!--begin section-white-->
  {{--   <section class="section-white small-padding no-padding-bottom">
    
      <!--begin container-->
      <div class="container"> 

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6 text-center padding-top-50 padding-bottom-50 wow slideInLeft">
            
                    <span class="comic-text">Discover</span>
                    
                    <h2 class="section-title">Our Chefs</h2>
                    
                    <p>Curabitur quas nets lacus ets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligula aliquam qui sequi. Lorem ipsum dolor sit amet, consectetur adipiscing elit rutrum eleif arcu sit aspernatur nets fugit, sedit quiadused fuscentinusad sagittis odio magna, in ultricies ex tincidunt.</p>
                    
                    <img src="images/menu-logo.png" alt="picture">
                
                </div>
                <!--end col-md-6-->
                
                <!--begin col-md-6-->
                <div class="col-md-6 wow slideInRight">
                                    
                    <img src="images/chef1.jpg" alt="picture" class="width-100">
                                    
                </div>
                <!--end col-md-6-->
                 
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
        
    </section> --}}
    <!--end section-white-->
        
    <!--begin footer -->
   @stop
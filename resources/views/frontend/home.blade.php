@extends('frontend.master')
@section('content')

 <!--end header -->
        
    <!--begin home-hero-section -->
    <div id="hero-section" class="home-hero-section">

    <!-- BEGIN REVOLUTION SLIDER -->
    @if(!$bannerData->isEmpty())

    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic-carousel2" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">

        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">

            <ul>

            @foreach($bannerData->slice(0,2) as $row)
            
                <!-- SLIDE  -->
                <li data-index="{{ $row->id }}" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"   data-rotate="0"  data-saveperformance="off"  data-title="Photography" data-description="">

                    <!-- MAIN IMAGE -->
                    @if($row->image!=null && file_exists(public_path('uploads/banner/images/'.$row->image)))
                    <img src="{{asset('uploads/banner/images/'.$row->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    @endif
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1a -->
                    <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                    id="slide-8-layer-9" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','40']" 
                    data-width="500"
                    data-height="270"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"

                    data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:700;e:Power4.easeOut;" 
                    data-transform_out="opacity:0;s:300;s:300;" 
                    data-mask_in="x:0px;y:0px;" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="500" 
                    data-responsive_offset="on" 


                    style="z-index: 5;background-color:rgba(255, 255, 255, 0.87);border-color:rgba(255, 255, 255, 0.87);"> 
                </div>

                <!-- LAYER NR. 1b -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                id="{{ $row->id }}" 
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','40']" 
                data-width="470"
                data-height="240"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"

                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:700;e:Power4.easeOut;" 
                data-transform_out="opacity:0;s:300;s:300;" 
                data-mask_in="x:0px;y:0px;" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="500" 
                data-responsive_offset="on" 


                style="z-index: 6;background-color:rgba(255, 255, 255, 0);border:1px solid #782f13;">
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption Concept-SubTitle   tp-resizeme" id="slide-8-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;font-style:italic;">@if($row->icon!=null && file_exists(public_path('uploads/banner/icons/'.$row->icon)))<img src="{{ asset('uploads/banner/icons/'.$row->icon) }}" alt="" width="60" height="65" data-no-retina>
           @endif </div>

            <!-- LAYER NR. 2 -->

            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
            id="{{ $row->id }}" 
            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
            data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
            data-fontsize="['30','30','30','25']"
            data-lineheight="['30','30','30','30']"
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"

            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
            data-start="1500" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on" 


            style="z-index: 6; white-space: nowrap;">@if(!empty($row->banner_title)) {{ $row->banner_title }} @endif
        </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
        id="{{ $row->id }}" 
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
        data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
        data-width="none"
        data-height="none"
        data-whitespace="nowrap"
        data-transform_idle="o:1;"

        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
        data-start="1500" 
        data-splitin="none" 
        data-splitout="none" 
        data-responsive_offset="on" 


        style="z-index: 7; white-space: nowrap;">@if(!empty($row->banner_detail)){{ strip_tags($row->banner_detail) }} @endif

    </div>

</li>
@endforeach


</ul>

<div class="tp-static-layers"></div>

<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>

</div>

</div>
@endif
<!-- END REVOLUTION SLIDER -->

</div>
    <!--end home-hero-section -->
    
    <section class="section-white padding-top-30 padding-bottom-0">

    <!--begin container-->
    <div class="container-fluid"> 
        <!--begin row-->
        <div class="row">
            @foreach($homeComponent->slice(0,3) as $row)

            <div class="col-md-4">
                
                <!--begin blog-item -->
                <div class="blog-item">
                    
                    <!--begin popup image -->
                    <div class="popup-wrapper">
                        <div class="popup-gallery" style="width: 400px;height: 244px;">
                            <a href="{{ $row->link }}" class="scrool">

                                <img src=@if($row->featured_image!=null && file_exists(public_path('uploads/homecomponent/images/'.$row->featured_image)))"{{ URL::asset('uploads/homecomponent/images/'.$row->featured_image) }}" @endif class="img-responsive width-100" alt="pic" style="min-height: 244px;">
                               {{--  <span class="eye-wrapper2"></span> --}}
                                <span class="eye-wrapper"></span><span class="text">{{ $row->title }}</span>
                                </a>
                            </div>
                        </div>
                        <!--begin popup image -->
                        
                    </div>
                    <!--end blog-item -->
                    
                </div>
                @endforeach
                
                <!--end col-md-4-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->
        
    </section>
    <!--end section-white-->

    <!--begin section-grey-->
    <section id="about" class="section-grey">

      <!--begin container-->
      <div class="container"> 

        <!--begin row-->
        <div class="row">

            <!--begin col-md-6-->
            <div class="col-md-6 wow slideInLeft">
                @if(!empty($aboutus->image))
                <img src="@if($aboutus->image!=null && file_exists(public_path('uploads/pages/images/'.$aboutus->image))){{ URL::asset('uploads/pages/images/'.$aboutus->image) }}"@endif alt="picture" class="width-100">
                @endif

            </div>
            <!--end col-md-6-->

            <!--begin col-md-6-->
            <div class="col-md-6 text-center padding-top-50 padding-bottom-50 wow slideInRight">

                <span class="comic-text">Delights</span>

                <h2 class="section-title">About Us</h2>

                <p>@if(!empty($aboutus->short_desc)){{ $aboutus->short_desc }}@endif</p>

                <a href="{{ URL::to('/about-us') }}" class="btn btn-lg btn-yellow">Learn More</a>

            </div>
            <!--end col-md-6-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
    
    
    <!--end section-grey-->
    
    <!--begin image-section -->
 <div class="image-section" style= @if(!empty($pageData->banner_image))@if($pageData->banner_image!=null && file_exists(public_path('uploads/pages/banner/'.$pageData->banner_image))) "background: url({{URL::asset('uploads/pages/banner/'.$pageData->banner_image) }}) 50% top no-repeat fixed;">
 @endif 
 @endif
    
        <!--begin image-overlay -->
        <div class="image-overlay"></div>
        <!--end image-overlay -->
            
        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">
                                    
                    <p class="hero-text2 white wow bounceIn">@if(!empty($pageData->long_desc)){{ $pageData->long_desc }}@endif</p>
                    
                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </div>
    <!--end image-section -->
    

    <!--end section-white-->
    
   
    <!--end first-menu-section -->    

    <!-- START REVOLUTION SLIDER -->
    <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
    
        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        <div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>	
            
                <!-- SLIDE  -->
                <li data-index="rs-129" data-transition="parallaxvertical" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="BAKING MAKES ME FOCUS" data-description="I find it calming because, in fairness, it is sort of magic...">
                    
                    <!-- MAIN IMAGE -->
                    <img src="images/rs0.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-129-layer-3" 
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                        data-height="full"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
             
                         data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 
                        data-basealign="slide" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-129-layer-1" 
                         data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                         data-y="['top','top','top','top']" data-voffset="['190','160','130','155']" 
                                    data-fontsize="['22','22','22','22']"
                        data-lineheight="['30','30','30','30']"
                        data-width="['600','600','600','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">I find it calming because, in fairness, it is sort of magic - you start off with all the stuff and what you end up with is so totally different.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Newspaper-Subtitle   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-129-layer-2" 
                         data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                         data-y="['top','top','top','top']" data-voffset="['140','110','80','100']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 7; white-space: nowrap;">BAKING MAKES ME FOCUS 
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Newspaper-Button rev-btn  rs-parallaxlevel-0" 
                         id="slide-129-layer-5" 
                         data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                         data-y="['top','top','top','top']" data-voffset="['311','281','241','195']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;" 
                         data-mask_out="x:0;y:0;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-responsive="off"
                        
                        style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE 
                    </div>
                    
                </li>
                
                <!-- SLIDE  -->
                <li data-index="rs-130" data-transition="parallaxvertical" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="BAKING MAKES ME FOCUS" data-description="I find it calming because, in fairness, it is sort of magic...">
                    
                    <!-- MAIN IMAGE -->
                    <img src="images/rs4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-130-layer-3" 
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                        data-height="full"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
             
                         data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 
                        data-basealign="slide" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-130-layer-1" 
                         data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                         data-y="['top','top','top','top']" data-voffset="['190','160','130','155']" 
                                    data-fontsize="['22','22','22','22']"
                        data-lineheight="['30','30','30','30']"
                        data-width="['600','600','600','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">I find it calming because, in fairness, it is sort of magic - you start off with all the stuff and what you end up with is so totally different.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Newspaper-Subtitle   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-130-layer-2" 
                         data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                         data-y="['top','top','top','top']" data-voffset="['140','110','80','100']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 7; white-space: nowrap;">BAKING MAKES ME FOCUS 
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Newspaper-Button rev-btn  rs-parallaxlevel-0" 
                         id="slide-130-layer-5" 
                         data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                         data-y="['top','top','top','top']" data-voffset="['311','281','241','195']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;" 
                         data-mask_out="x:0;y:0;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-responsive="off"
                        
                        style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE 
                    </div>
                    
                </li>
                
                <!-- SLIDE  -->
                <li data-index="rs-131" data-transition="parallaxvertical" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="BAKING MAKES ME FOCUS" data-description="I find it calming because, in fairness, it is sort of magic...">
                    
                    <!-- MAIN IMAGE -->
                    <img src="images/rs5.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-131-layer-3" 
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                        data-height="full"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
             
                         data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 
                        data-basealign="slide" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-131-layer-1" 
                         data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                         data-y="['top','top','top','top']" data-voffset="['190','160','130','155']" 
                                    data-fontsize="['22','22','22','22']"
                        data-lineheight="['30','30','30','30']"
                        data-width="['600','600','600','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">I find it calming because, in fairness, it is sort of magic - you start off with all the stuff and what you end up with is so totally different.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Newspaper-Subtitle   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-131-layer-2" 
                         data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                         data-y="['top','top','top','top']" data-voffset="['140','110','80','100']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 7; white-space: nowrap;">BAKING MAKES ME FOCUS 
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Newspaper-Button rev-btn  rs-parallaxlevel-0" 
                         id="slide-131-layer-5" 
                         data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                         data-y="['top','top','top','top']" data-voffset="['311','281','241','195']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;" 
                         data-mask_out="x:0;y:0;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-responsive="off"
                        
                        style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE 
                    </div>
                    
                </li>
                
                <!-- SLIDE  -->
                <li data-index="rs-132" data-transition="parallaxvertical" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="BAKING MAKES ME FOCUS" data-description="I find it calming because, in fairness, it is sort of magic...">
                    
                    <!-- MAIN IMAGE -->
                    <img src="images/rs6.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-132-layer-3" 
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                        data-height="full"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
             
                         data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 
                        data-basealign="slide" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-132-layer-1" 
                         data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                         data-y="['top','top','top','top']" data-voffset="['190','160','130','155']" 
                                    data-fontsize="['22','22','22','22']"
                        data-lineheight="['30','30','30','30']"
                        data-width="['600','600','600','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">I find it calming because, in fairness, it is sort of magic - you start off with all the stuff and what you end up with is so totally different.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Newspaper-Subtitle   tp-resizeme rs-parallaxlevel-0" 
                         id="slide-132-layer-2" 
                         data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                         data-y="['top','top','top','top']" data-voffset="['140','110','80','100']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 

                        
                        style="z-index: 7; white-space: nowrap;">BAKING MAKES ME FOCUS 
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Newspaper-Button rev-btn  rs-parallaxlevel-0" 
                         id="slide-132-layer-5" 
                         data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                         data-y="['top','top','top','top']" data-voffset="['311','281','241','195']" 
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
             
                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                         data-mask_in="x:0px;y:0px;" 
                         data-mask_out="x:0;y:0;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-responsive="off"
                        
                        style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE 
                    </div>
                    
                </li>
                
            </ul>
            
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>	
            
        </div>
        
    </div>
    <!-- END REVOLUTION SLIDER -->
                    
    <!--begin section-white-->
    
    <!--end section-white-->
        
    <!--begin footer -->
@stop
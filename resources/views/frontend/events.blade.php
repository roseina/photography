@extends('frontend.master')
@section('content')
         
    <!--begin menu-hero-section -->
      <section id="hero-section" class="about-hero-section" style=@if(!empty($pageData->banner_image))@if($pageData->banner_image!=null && file_exists(public_path('uploads/pages/banner/'.$pageData->banner_image))) "background: url({{URL::asset('uploads/pages/banner/'.$pageData->banner_image) }}) 50% top no-repeat fixed; @endif @endif>
    
        <!--begin image-overlay -->
        <div class="image-overlay" style=" height:1280 px; width:1920 px;"></div>
        <!--end image-overlay -->
            
        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">
                
                    <span class="comic-text wow fadeIn" data-wow-delay="0.5s">@if(!empty($pageData->page_title)){{ $pageData->page_title}} @endif</span>
                    
                    {{-- <h2 class="section-title white wow bounceIn" data-wow-delay="1s">FOOD &amp; DRINKS</h2> --}}
                    
                    <p class="hero-text wow fadeInUp" data-wow-delay="2s">@if(!empty($pageData->short_desc)){{ $pageData->short_desc}} @endif</p>
                    
                </div>
                <!--end col-md-10-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </section>
    <!--end menu-hero-section -->
    
    <!--begin first-menu-section -->
    {{-- <section class="section-grey">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
             @if(!$data->isEmpty())
             @foreach ($data->chunk(2) as $chunk)
                <div class="row">
                    @foreach ($chunk as $d)
                      <div class="col-md-6">
                
                    <h2 class="menu-section-title">{{ $d->title }}</h2>
                    
                    <!--begin menu-wrapper-->
                    @php $items=App\MenuItem::where('menu_id',$d->id)->where('status', 'publish')->get(); @endphp  
                    @foreach($items as $i)
                    <div class="menu-wrapper">
                        
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                            @if($i->image != "" && file_exists(public_path('uploads/gallery/items/'.$i->image)))
                                    <img src="{{ URL::asset('uploads/gallery/items/'.$i->image) }}" width="100" alt="food">
                                @endif
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5>{{ $i->title }}</h5>
                                
                                <p class="price">Rs.{{ $i->price }}</p>
                                
                                <span class="menu-dot-line"></span>
                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="menu-ingredients">{{$i->description}}</p>
                                
                        </div>
                        <!--end menu-description-->
                                
                    </div>
                    @endforeach
                    
                    <!--end menu-wrapper-->
                    
                </div>  
                    @endforeach
                </div>
            @endforeach
            
            @endif
            <!--end row-->
            
            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6">
                
                    <h2 class="menu-section-title">Beer &amp; Cider</h2>
                    
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                        
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                            <img src="images/m5.jpg" class="width-100" alt="food">
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5>English Beer</h5>
                                
                                <p class="price">$12.95</p>
                                
                                <span class="menu-dot-line"></span>
                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="menu-ingredients">Curabitur quas nets lacus ets nulat iaculis loremis etimus nisle varius vitae seditum fugiatum ligula aliquam quist sequi elit rutrum eleif arcu quias etis nisle varius.</p>
                                
                        </div>
                        <!--end menu-description-->
                                
                    </div>
                    <!--end menu-wrapper-->
                                        
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                        
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                            <img src="images/m6.jpg" class="width-100" alt="food">
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5>Beer Fest</h5>
                                
                                <p class="price">$9.50</p>
                                
                                <span class="menu-dot-line"></span>
                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="menu-ingredients">Curabitur quas nets lacus ets nulat iaculis loremis etimus nisle varius vitae seditum fugiatum ligula aliquam quist sequi elit rutrum eleif arcu quias etis nisle varius.</p>
                                
                        </div>
                        <!--end menu-description-->
                                
                    </div>
                    <!--end menu-wrapper-->
                    
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                    
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                            <img src="images/m7.jpg" class="width-100" alt="food">
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5>Apple Cider</h5>
                                
                                <p class="price">$7.45</p>
                                
                                <span class="menu-dot-line"></span>
                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="menu-ingredients">Curabitur quas nets lacus ets nulat iaculis loremis etimus nisle varius vitae seditum fugiatum ligula aliquam quist sequi elit rutrum eleif arcu quias etis nisle varius.</p>
                                
                        </div>
                        <!--end menu-description-->
                                
                    </div>
                    <!--end menu-wrapper-->
                    
                </div>
                <!--end col-md-6-->
            
                <!--begin col-md-6-->
                <div class="col-md-6">
                
                    <h2 class="menu-section-title">Wine &amp; Champagne</h2>
                                        
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                        
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                            <img src="images/m10.jpg" class="width-100" alt="food">
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5>Red Whine</h5>
                                
                                <p class="price">$25.95</p>
                                
                                <span class="menu-dot-line"></span>
                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="menu-ingredients">Curabitur quas nets lacus ets nulat iaculis loremis etimus nisle varius vitae seditum fugiatum ligula aliquam quist sequi elit rutrum eleif arcu quias etis nisle varius.</p>
                                
                        </div>
                        <!--end menu-description-->
                                
                    </div>
                    <!--end menu-wrapper-->
                    
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                    
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                            <img src="images/m11.jpg" class="width-100" alt="food">
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5>White Wine</h5>

                                
                                <p class="price">$12.90</p>
                                
                                <span class="menu-dot-line"></span>
                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="menu-ingredients">Curabitur quas nets lacus ets nulat iaculis loremis etimus nisle varius vitae seditum fugiatum ligula aliquam quist sequi elit rutrum eleif arcu quias etis nisle varius.</p>
                                
                        </div>
                        <!--end menu-description-->
                                
                    </div>
                    <!--end menu-wrapper-->
                                        
                    <!--begin menu-wrapper-->
                    <div class="menu-wrapper">
                        
                        <!--begin menu-image-->
                        <div class="menu-image">
                        
                            <img src="images/m12.jpg" class="width-100" alt="food">
                                
                        </div>
                        <!--end menu-image-->
                         
                        <!--begin menu-description-->
                        <div class="menu-description">
                           
                            <!--begin menu-list-->
                            <div class="menu-list">
                            
                                <h5>Champagne</h5>
                                
                                <p class="price">$19.25</p>
                                
                                <span class="menu-dot-line"></span>
                                
                            </div>
                            <!--end menu-list-->
                            
                            <p class="menu-ingredients">Curabitur quas nets lacus ets nulat iaculis loremis etimus nisle varius vitae seditum fugiatum ligula aliquam quist sequi elit rutrum eleif arcu quias etis nisle varius.</p>
                                
                        </div>
                        <!--end menu-description-->
                                
                    </div>
                    <!--end menu-wrapper-->
                    
                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
        
    </section> --}}
    <!--end first-menu-section -->
    
    <!--begin image-section -->
     <div class="image-section-second"  style= @if(!empty($pageData->image))@if($pageData->image!=null && file_exists(public_path('uploads/pages/images/'.$pageData->image))) "background: url({{URL::asset('uploads/pages/images/'.$pageData->image) }}) 50% top no-repeat fixed;">
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
                                    
                    <p class="hero-text2 white wow bounceIn">@if(!empty($data->long_description)){{strip_tags($data->long_description)}} @endif</p>

                    
                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->    
        
    </div>
   
@endsection
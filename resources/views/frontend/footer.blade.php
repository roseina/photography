
    <div class="footer">
            
        <!--begin container -->
        <div class="container">
        
            <!--begin row -->
            <div class="row footer-top">
            
                <!--begin col-md-3 -->
                <div class="col-md-4 padding-bottom-50">
                
                	<h4>Our Partners</h4>
                    
                    <p>Quis autem velis et reprehender etims quiste voluptate velit esse quam nihil etsa illum sedit consequatur quias voluptas sit netsum  etis nisle varius qui sequi.</p>
                    
                    <a href="about.html" class="btn btn-lg btn-yellow-x-small scrool">OUR STORY</a>
                    
                </div>
                <!--end col-md-3 -->
                
                <!--begin col-md-3 -->
                <div class="col-md-4 padding-bottom-50">
                
                	<h4>FEATURED EVENTS</h4>
                    
                    <ul class="footer-gallery">
                    @if($events->isNotEmpty())
                        @foreach($events->splice(0,6) as $event)
                        <li class="popup-gallery">
                            <a class="popup2" href="{{ URL::to('/uploads/events/images/'.$event->event_image) }}images/instagram1-large.jpg">
                            	<img src="{{URL::asset('/uploads/events/images/'.$event->event_image)}}" alt="event" height="65"  width="50"/>
                            </a>
                        </li>
                        @endforeach
                        @endif
					</ul>
                    
                </div>
                <!--end col-md-3 -->
                
                <!--begin col-md-3 -->
                <div class="col-md-4 padding-bottom-50">
                @if($setting!=null)
   
                
                	<h4>CONTACT DETAILS</h4>
                    
                    
                    <p class="contact_info"><i class="fa fa-map-marker"></i> {{ $setting->address }}</p>
                    
                    <p class="contact_info"><i class="fa fa-phone"></i> {{ $setting->phone }}, {{ $setting->phone1 }}</p>
                
                    <p class="contact_info"><i class="fa fa-envelope-square"></i> <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
            
               @endif

                </div>
                <!--end col-md-3 -->
                
            </div>
            <!--end row -->
            
            <!--begin row -->
            <div class="row">
                
                <!--begin footer-bottom -->
                <div class="footer-bottom">
                
                    <!--begin col-md-5 -->
                    <div class="col-md-5">
                        
                        <!--begin copyright -->
                        <div class="copyright ">
                            <p>© 2017 Gsubodh Photography</p>
                            
                        </div>
                        <!--end copyright -->
                       
                    </div>
                    <!--end col-md-5 -->
                    
                    <!--begin col-md-2 -->
                    <div class="col-md-2 text-center">
                    
                    	<a href="#hero-section" class="scrool top-scroll"><i class="fa fa-angle-double-up"></i></a>
                        
                    </div>
                    <!--end col-md-2 -->
                    
                    <!--begin col-md-5 -->
                    <div class="col-md-5">
                                                        
                        <!--begin footer_social -->
                        <ul class="footer_social">
                            <li>
                                Follow Us:
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                        <!--end footer_social -->
                        
                    </div>
                    <!--end col-md-5 -->
                        
                </div>
                <!--end footer-bottom -->
                        
            </div>
            <!--end row -->
            
        </div>
        <!--end container -->
                
    </div>
<header class="header">

        <!--begin nav -->
        <nav class="navbar navbar-default navbar-fixed-top">
            
            <!--begin container -->
            <div class="container">
        
                <!--begin navbar -->
                <div class="navbar-header">
                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                                                                        
                    <a href="{{ URL::to('/') }}" class="navbar-brand brand scrool"><img src="images/logo.png" alt="logo" class="width-100"></a>
                </div>
                        
                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">			      
                        <li class="selected"><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="{{ URL::to('/aboutus') }}">About Us</a></li>
                        {{-- <li><a href="{{ URL::to('/') }}">Menu</a></li> --}}
                        <li><a href="{{ URL::to('/our-event') }}">Our Events</a></li>
                        <li><a href="{{ URL::to('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ URL::to('/contact-us') }}">Contact</a></li>
                        
                        @if(!empty($setting))
                        
                        <li class="social"><a href=" @if($setting->twitter!=null){{ URL::to('$setting->twitter') }} @else {{ URL::to('#') }}@endif" class="first"><i class="fa fa-twitter"></i></a></li>
                        <li class="social"><a href=" @if($setting->facebook!=null){{ URL::to('$setting->facebook') }} @else {{ URL::to('#') }}@endif"><i class="fa fa-facebook"></i></a></li>
                        <li class="social"><a href=" @if($setting->instagram!=null){{ URL::to('$setting->instagram') }} @else {{ URL::to('#') }}@endif" class="last"><i class="fa fa-instagram"></i></a></li>
                        @endif
                        
                    </ul>
                </div>
                <!--end navbar -->
                                    
            </div>
    		<!--end container -->
            
        </nav>
    	<!--end nav -->
        
    </header>
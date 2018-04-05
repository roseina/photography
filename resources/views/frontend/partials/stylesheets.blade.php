 <link rel="stylesheet" href="{{URL::asset('frontend/css/stuck.css')}}">
 <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.carousel.css')}}">
 <link rel="stylesheet" href="{{URL::asset('frontend/css/form.css')}}">
 <link rel="stylesheet" href="{{URL::asset('frontend/css/touchTouch.css')}}">
 <link rel="stylesheet" href="{{URL::asset('frontend/css/camera.css')}}">
 <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 <script src="{{URL::asset('frontend/js/jquery.js')}}"></script>
 <script src="{{URL::asset('frontend/js/jquery-migrate-1.1.1.js')}}"></script>
 <script src="{{URL::asset('frontend/js/script.js')}}"></script>
 <script src="{{URL::asset('frontend/js/superfish.js')}}"></script>
 <script src="{{URL::asset('frontend/js/jquery.equalheights.js')}}"></script>
 <script src="{{URL::asset('frontend/js/jquery.mobilemenu.js')}}"></script>
 <script src="{{URL::asset('frontend/js/jquery.easing.1.3.js')}}"></script>
 <script src="{{URL::asset('frontend/js/tmStickUp.js')}}"></script>
 <script src="{{URL::asset('frontend/js/jquery.ui.totop.js')}}"></script>
 <script src="{{URL::asset('frontend/js/touchTouch.jquery.js')}}"></script>
 <script src="{{URL::asset('frontend/js/owl.carousel.js')}}"></script>
 <script src="{{URL::asset('frontend/js/sForm.js')}}"></script>
 <script src="{{URL::asset('frontend/js/camera.js')}}"></script>
 <!--[if (gt IE 9)|!(IE)]><!-->
 <script src="{{URL::asset('frontend/js/jquery.mobile.customized.min.js')}}"></script>
 <!--<![endif]-->
 <script>
 	$(document).ready(function(){
 		jQuery('#camera_wrap').camera({
 			loader: false,
 			pagination: false ,
 			minHeight: '200',
 			thumbnails: false,
 			height: '39,0625%',
 			caption: true,
 			navigation: true,
 			fx: 'mosaic'
 		});
 		var owl = $("#owl");
 		owl.owlCarousel({
                items : 3, //10 items above 1000px browser width
                itemsDesktop : [995,5], //5 items between 1000px and 901px
                itemsDesktopSmall : [767, 3], // betweem 900px and 601px
                itemsTablet: [700, 3], //2 items between 600 and 0
                itemsMobile : [479, 2], // itemsMobile disabled - inherit from itemsTablet option
                navigation : true,
            });
 		$().UItoTop({ easingType: 'easeOutQuart' });
 		$('#stuck_container').tmStickUp({});
 		$('.gallery a.gal_item').touchTouch();
 	});
 </script>
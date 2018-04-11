@extends('frontend.master')
@section('content')
<div class="slider_wrapper">
	<div id="camera_wrap" class="">
	@foreach($homecomponent as $home)
		<div data-src="{{URL::asset('uploads/homecomponent/images/'.$home->featured_image)}}">
			<div class="caption fadeIn">
				<div class="title">{{ $home->title }}</div>
				<p>{{ $home->description }}</p>
				
			</div>
		</div>
		@endforeach
	</div>
</div>
<!--=====================Content======================-->
<div class="block1">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<div class="rel">
					<p>
						Hi! I’m Katrine Dove. Photography is a passion of mine. Let me use my talent & professionalism to capture the precious moments of your life.
					</p>
					<a href="#" class="btn bt__1">Hire Me</a>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="content">
	<div class="container"><div class="ic"></div>
	<div class="row">
		<div class="grid_12">
			<h2>Gallery</h2>
			<div class="gallery">
				<div class="row">
				
					<div class="grid_4">
						<a href="{{URL::asset('frontend/images/big1.jpg')}}" class="gal_item">

							<img src="{{URL::asset('frontend/images/page1_img1.jpg')}}" alt="">
							<div class="gal_caption">test</div>
							<span class="gal_magnify"></span>
						</a>
					</div>
				h
					{{-- <div class="grid_4">
						<a href="{{URL::asset('frontend/images/big2.jpg')}}" class="gal_item">
							<img src="{{URL::asset('frontend/images/page1_img2.jpg')}}" alt="">
							<div class="gal_caption">Fashion</div>
							<span class="gal_magnify"></span>
						</a>
					</div>
					<div class="grid_4">
						<a href="{{URL::asset('frontend/images/big3.jpg')}}" class="gal_item">
							<img src="{{URL::asset('frontend/images/page1_img3.jpg')}}" alt="">
							<div class="gal_caption">Wedding</div>
							<span class="gal_magnify"></span>
						</a>
					</div>
					<div class="grid_4">
						<a href="{{URL::asset('frontend/images/big4.jpg')}}" class="gal_item">
							<img src="{{URL::asset('frontend/images/page1_img4.jpg')}}" alt="">
							<div class="gal_caption">Interior</div>
							<span class="gal_magnify"></span>
						</a>
					</div>
					<div class="grid_4">
						<a href="{{URL::asset('frontend/images/big5.jpg')}}" class="gal_item">
							<img src="{{URL::asset('frontend/images/page1_img5.jpg')}}" alt="">
							<div class="gal_caption">Animals</div>
							<span class="gal_magnify"></span>
						</a>
					</div>
					<div class="grid_4">
						<a href="{{URL::asset('frontend/images/big6.jpg')}}" class="gal_item">
							<img src="{{URL::asset('frontend/images/page1_img6.jpg')}}" alt="">
							<div class="gal_caption">Nature</div>
							<span class="gal_magnify"></span>
						</a>
					</div> --}}
				</div>
			</div>
		</div>
		<div class="clear"></div>
		
		
		<div class="clear"></div>
		<div class="grid_12">
			<h3 class="head1">Testimonials</h3>
		</div>
		<div class="clear"></div>
		<section id="testimonials-slider" class="dark">
			<div class="page-header text-center">
				<h2>Testimonials</h2>
			</div>
			<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#testimonial-slider" data-slide-to="0" class="active"></li>
					<li data-target="#testimonial-slider" data-slide-to="1" class=""></li>
					<li data-target="#testimonial-slider" data-slide-to="2" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<!-- slide-item -->
					<div class="item active">
						<div class="testimonial">
							<img src="{{URL::asset('frontend/images/testimonial1.jpg')}}" alt="">
							<h3>Nam eleifend vestibulum dignissim. Quisque in ante metus. Nam id facilisis nunc, eu vulputate sapien.</h3>
							<h5 class="customer-name">Johnathan Doe</h5>
						</div><!-- / testimonial-->
					</div><!-- / slide item -->
					<!-- slide-item -->
					<div class="item">
						<div class="testimonial">
							<img src="{{URL::asset('frontend/images/testimonial2.jpg')}}" alt="">
							<h3>Nam eleifend vestibulum dignissim. Quisque in ante metus. Nam id facilisis nunc, eu vulputate sapien.</h3>
							<h5 class="customer-name">Erica Doe</h5>
						</div><!-- / testimonial-->
					</div><!-- / slide item -->
					<!-- slide-item -->
					<div class="item">
						<div class="testimonial">
							<img src="{{URL::asset('frontend/images/testimonial3.jpg')}}" alt="">
							<h3>Nam eleifend vestibulum dignissim. Quisque in ante metus. Nam id facilisis nunc, eu vulputate sapien.</h3>
							<h5 class="customer-name">Jameson Doe</h5>
						</div><!-- / testimonial-->
					</div><!-- / slide item -->
				</div><!-- / carousel-inner -->
			</div><!-- / testimonial-slider -->
		</section>
	</div>
</div>

</section>
@section('scripts')
<script src="{{URL::asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('frontend/js/scrolling-nav.js')}}"></script>
@stop
@stop

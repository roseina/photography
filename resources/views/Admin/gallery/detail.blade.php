@extends('Admin.master')
@section('content')
		
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- gallery -->
				<div class="grids-heading gallery-heading">
					<h2>Photos 0f {{ $gallery->name }}</h2>
				</div>
				<div class="gallery-grids">
						<div class="show-reel">
						@foreach($galleryPhotos as $photo)
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
								@if($photo->image != "" && file_exists(public_path('uploads/gallery/images/'.$photo->image)))
									<a href="{{asset('uploads/gallery/images/'.$photo->image )}}" class="lsb-preview" data-lsb-group="header">
									<img src="{{ asset('uploads/gallery/images/'.$photo->image) }}">
										<div class="agileits-caption">
											<p>{{ $photo->caption }}</p>
										</div>
									</a>
									@else
									<p>No Image Availabe</p>
									@endif
								</div>
							</div>
							@endforeach
							
						<script>
							$(window).load(function() {
							  $.fn.lightspeedBox();
							});

						</script>
				</div>
			<!-- //gallery -->

			</div>
		</div>
		</div>
		
		@endsection
@section('scripts')
<script src="{{ URL::asset('backend/js/bootstrap.js') }}">
</script>
	<script src="{{ URL::asset('backend/js/lsb.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('backend/css/lsb.css') }}">

@endsection

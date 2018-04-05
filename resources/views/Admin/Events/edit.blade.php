@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- input-forms -->
		<div class="grids">
			<div class="progressbar-heading grids-heading">
				<h2> Edit Events</h2>
			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s" style="background-color: red !important;">
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
					<li><a href="{{ URL::to('admin/event') }}">Events</a></li>

					<li class='active'>Edit Event</li>
				</ol>
			</div>
		</div>

		<div class="panel panel-widget forms-panel">
			@include('errors/errors')
			<div class="forms">
				<h3 class="title1"></h3>
				<div class="form-three widget-shadow">
					<form class="form-horizontal" action="{{ URL::to('admin/event/update')}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<input type="hidden" name="id" value="{{ $data->id }}">
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Event Title</label>
							<div class="col-sm-5">
								<input type="text" class="form-control1" name="event_title" id="focusedinput" placeholder="Event title" value={{ $data->event_title }}>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Event Detail</label>
							<div class="col-sm-5">
								<textarea name="detail" id="" class="form-control texteditor" rows="10">{{ $data->detail }}</textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Upload an image file</label>
							<div class="col-sm-6">
								<input type="file" class="form-control" name="event_image"  accept="image/*" value="">

								@if($data->event_image != "" && file_exists(public_path('uploads/events/images/'.$data->event_image)))
								
								<img src="{{ asset('/uploads/events/images/'.$data->event_image) }}"  width="100">
								<a href="{{ URL::to('admin/event/delImage?id='.$data->id)}}" data-confirm='Are you sure you want to remove this image?' style="margin-top: 20px;" class="btn btn-danger">Remove Image </a>
								@else

								<p>No Image.</p>
								@endif
							</div>
						</div>
						
						<button type="submit" class="btn btn-success w3ls-button">Save</button> 
						<a class="btn btn-warning w3ls-button" href='{{ URL::to('admin/event') }}'>Cancel</a>

					</div>

				</form>
			</div>

		</div>
	</div>


</div>

<!-- //input-forms -->
</div>
</div>




@endsection
@section('scripts')
<script src="{{ URL::asset('backend/js/bootstrap.js') }}">

</script>
@endsection


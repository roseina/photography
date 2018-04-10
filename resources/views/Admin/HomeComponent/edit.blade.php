@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- input-forms -->
		<div class="grids">
			<div class="progressbar-heading grids-heading">
				<h2> Edit HomeComponent for  {{ $data->title }}</h2>
			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s" style="background-color: red !important;">
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
					<li><a href="{{ URL::to('admin/homecomponent') }}">Home Component</a></li>

					<li class='active'>Edit Home Component</li>
				</ol>
			</div>
		</div>

		<div class="panel panel-widget forms-panel">
			@include('errors/errors')
			<div class="forms">
				<h3 class="title1"></h3>
				<div class="form-three widget-shadow">
					<form class="form-horizontal" action="{{ URL::to('admin/homecomponent/update')}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}

						<div class="form-group">
						<input type="hidden" name="id" value="{{ $data->id }}">
							<label for="focusedinput" class="col-sm-2 control-label">Title</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="title" id="focusedinput" placeholder="Home component name" value="{{ $data->title }}">
							</div>
						</div>
						<div class="form-group">
								<label class="col-sm-2 control-label">Description</label>
								<div class="col-sm-5">
									<textarea name="description" id="" class="form-control texteditor" rows="10">{{$data->description}}</textarea>
								</div>
							</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Upload an image file</label>
							<div class="col-sm-6">
								<input type="file" class="form-control" name="featured_image"  accept="image/*" value="">

								@if($data->featured_image != "" && file_exists(public_path('uploads/homecomponent/images/'.$data->featured_image)))
								
								<img src="{{ asset('/uploads/homecomponent/images/'.$data->featured_image) }}"  width="100">
								<a href="{{ URL::to('admin/homecomponent/delImage?id='.$data->id)}}" data-confirm='Are you sure you want to remove this image?' style="margin-top: 20px;" class="btn btn-danger">Remove Image </a>
								@else

								<p>No Image.</p>
								@endif
							</div>
						</div>

						


						<div class="form-group">
							<label for="radio" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-8">
								<div class="radio-inline"><label><input type="radio" name='status' value="Active" @if($data->status=="Active") checked="checked" @endif > Active</label></div>
								<div class="radio-inline"><label><input type="radio" name="status" value=" Inactive" @if($data->status=="Inactive") checked="checked" @endif> Inactive</label></div>
							</div>
						</div>
						<button type="submit" class="btn btn-success w3ls-button">Submit</button> 
						<a class="btn btn-warning w3ls-button" href='{{ URL::to('admin/homecomponent') }}'>Cancel</a>

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


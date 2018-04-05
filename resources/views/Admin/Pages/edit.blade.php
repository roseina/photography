@extends('Admin.master')
@section('content')
<div class="main-grid">
	<div class="agile-grids">	
		<!-- input-forms -->
		<div class="grids">
			<div class="progressbar-heading grids-heading">
				<h2> Edit Page {{  $data->page_title }} </h2>
			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
					<li><a href="{{ URL::to('admin/pages') }}">Pages</a></li>
					<li class="active">Edit Page</li>

				</ol>
			</div>

			<div class="panel panel-widget forms-panel">
				@include('errors/errors')
				<div class="forms">
					<h3 class="title1"></h3>
					<div class="form-three widget-shadow">
						<form class="form-horizontal" action="{{ URL::to('admin/pages/update')}}" method="post" enctype="multipart/form-data">
							{!! csrf_field() !!}
							<input type="hidden" name="id" value="{{ $data->id }}">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Page Title</label>
								<div class="col-sm-5">
									<input type="text" class="form-control1" name="page_title" id="head_title" placeholder="Page Title" value={{ $data->page_title }}>
								</div>
							</div>

							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Slug</label>
								<div class="col-sm-5">
									<input type="text" class="form-control1" name="slug" id="slug" placeholder="Slug" value={{ $data->slug }}>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Banner Text</label>
								<div class="col-sm-5">
									<textarea name="short_desc" id="" class="form-control texteditor" rows="10">{{ $data->banner_text}}</textarea>
								</div>
							</div>

							
							<div class="form-group">
								<label class="col-sm-2 control-label">Short Description</label>
								<div class="col-sm-5">
									<textarea name="short_desc" id="" class="form-control texteditor" rows="10">{{ $data->short_desc  }}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Long Description</label>
								<div class="col-sm-5">
									<textarea name="long_desc" id="" class="form-control texteditor" rows="10">{{ $data->long_desc}}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Upload page image</label>
								<div class="col-sm-6">
									<input type="file" class="form-control" name="image"  accept="image/*" value="">



									@if($data->image != "" && file_exists(public_path('uploads/pages/images/'.$data->image)))
									<img src="{{ asset('uploads/pages/images/'.$data->image) }}"  width="162">
									<a href="{{ URL::to('admin/pages/delimage?id='.$data->id)}}" data-confirm='Are you sure you want to remove this image?' style="margin-top: 20px;" class="btn btn-danger">Remove Image</a>
									@else
									<p>No Image.</p>
									@endif
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Upload banner image</label>
								<div class="col-sm-6">
									<input type="file" class="form-control" name="banner_image"  accept="image/*" value="">



									@if($data->image != "" && file_exists(public_path('uploads/pages/banner/'.$data->banner_image)))
									<img src="{{ asset('uploads/pages/banner/'.$data->banner_image) }}"  width="162">
									<a href="{{ URL::to('admin/pages/delimage?id='.$data->id)}}" data-confirm='Are you sure you want to remove this image?' style="margin-top: 20px;" class="btn btn-danger">Remove Image</a>
									@else
									<p>No Image.</p>
									@endif
								</div>
							</div>

							
							<button type="submit" class="btn btn-success w3ls-button">Submit</button> 
							<a class="btn btn-warning w3ls-button" href='{{ URL::to('admin/pages') }}'>Cancel</a>

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

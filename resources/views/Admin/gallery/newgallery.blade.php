@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- input-forms -->
		<div class="grids">
			<div class="progressbar-heading grids-heading">
				<h2> Add New Gallery</h2>
			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
									<li><a href="{{ URL::to('admin/gallery') }}">Gallery</a></li>
									<li class="active">New Gallery</li>
									
								</ol>
							</div>

			<div class="panel panel-widget forms-panel">
@include('errors/errors')
				<div class="forms">
					<h3 class="title1"></h3>
					<div class="form-three widget-shadow">
						<form class="form-horizontal" action="{{ URL::to('admin/gallery/savegallery')}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Gallery Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="name" id="head_title" placeholder="Gallery name" value={{ Input::old('name') }}>
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Slug</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="slug" id="slug" placeholder="slug" value={{ Input::old('slug') }}>
								</div>
							</div>
							<div class="form-group">
							<label class="col-sm-2 control-label"> Upload an image file</label>
							<div class="col-sm-6">
								<input type="file" class="form-control" name="image"   accept="image/*">
							</div>

						</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Html Title</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="html_title" id="focusedinput" placeholder="Html Title" value={{ Input::old('html_title') }}>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Html Description</label>
								<div class="col-sm-10">
									<textarea name="html_description" id="" class="form-control texteditor" rows="10">{{ Input::old('html_description') }}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Html Keywords</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="html_keywords" id="focusedinput" placeholder="Html keywords" value={{ Input::old('html_keywords') }}>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Short Description</label>
								<div class="col-sm-10">
									<textarea name="short_desc" id="" class="form-control texteditor" rows="10">{{ Input::old('short_desc') }}</textarea>
								</div>
							</div>
							    
       
							<div class="form-group">
								<label for="radio" class="col-sm-2 control-label">Status</label>
								<div class="col-sm-8">
									<div class="radio-inline"><label><input type="radio" name='status' value="Active" > Active</label></div>
									<div class="radio-inline"><label><input type="radio" name="status" value=" Inactive" checked=""> Inactive</label></div>
								</div>
							</div>
							<button type="submit" class="btn btn-success w3ls-button">Submit</button> 
							<a class="btn btn-warning w3ls-button" href='{{ URL::to('admin/gallery') }}'>Cancel</a>
							 
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

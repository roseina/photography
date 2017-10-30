@extends('Admin.master')
@section('content')
<div class="main-grid">
	<div class="agile-grids">	
		<!-- input-forms -->
		<div class="grids">
			<div class="progressbar-heading grids-heading">
				<h2> Add New Page </h2>
			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
					<li><a href="{{ URL::to('admin/pages') }}">Pages</a></li>
					<li class="active">New Page</li>

				</ol>
			</div>

			<div class="panel panel-widget forms-panel">
				@include('errors/errors')
				<div class="forms">
					<h3 class="title1"></h3>
					<div class="form-three widget-shadow">
						<form class="form-horizontal" action="{{ URL::to('admin/pages/savepage')}}" method="post" enctype="multipart/form-data">
							{!! csrf_field() !!}
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Page Title</label>
								<div class="col-sm-5">
									<input type="text" class="form-control1" name="page_title" id="focusedinput" placeholder="Page Title" value={{ Input::old('page_title') }}>
								</div>
							</div>

							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Slug</label>
								<div class="col-sm-5">
									<input type="text" class="form-control1" name="slug" id="focusedinput" placeholder="Slug" value={{ Input::old('slug') }}>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Banner Text</label>
								<div class="col-sm-5">
									<textarea name="short_desc" id="" class="form-control texteditor" rows="10">{{ Input::old('short_desc') }}</textarea>
								</div>
							</div>

							
							<div class="form-group">
								<label class="col-sm-2 control-label">Short Description</label>
								<div class="col-sm-5">
									<textarea name="short_desc" id="" class="form-control texteditor" rows="10">{{ Input::old('short_desc') }}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Long Description</label>
								<div class="col-sm-5">
									<textarea name="long_desc" id="" class="form-control texteditor" rows="10">{{ Input::old('long_desc') }}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"> Upload a page image</label>
								<div class="col-sm-5">
									<input type="file" class="form-control" name="image"   accept="image/*" value="{{Input::old('image')}}">
									<p style="font-size: 13px; ">Please select an image upto 2MB.</p>
								</div>

							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"> Upload a banner image</label>
								<div class="col-sm-5">
									<input type="file" class="form-control" name="banner_image"   accept="image/*" value="{{Input::old('banner_image')}}">
									<p style="font-size: 13px; ">Please select an image upto 2MB.</p>
								</div>

							</div>
							<div class="form-group">
								<label for="radio" class="col-sm-2 control-label">Status</label>
								<div class="col-sm-5">
									<div class="radio-inline"><label><input type="radio" name='status' value="Active" > Active</label></div>
									<div class="radio-inline"><label><input type="radio" name="status" value=" Inactive" checked=""> Inactive</label></div>
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

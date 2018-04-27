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
					<li><a href="{{ URL::to('admin/banner') }}">Banner</a></li>
					<li class="active">New Banner</li>

				</ol>
			</div>

			<div class="panel panel-widget forms-panel">
				@include('errors/errors')
				<div class="forms">
					<h3 class="title1"></h3>
					<div class="form-three widget-shadow">
						<form class="form-horizontal" action="{{ URL::to('admin/banner/store')}}" method="post" enctype="multipart/form-data">
					{!! csrf_field() !!}
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Title</label>
								<div class="col-sm-5">
									<input type="text" class="form-control1" name="banner_title" id="focusedinput" placeholder="Page Title" value={{ Input::old('banner_title') }}>
								</div>
							</div>

							
							<div class="form-group">
								<label class="col-sm-2 control-label">Detail</label>
								<div class="col-sm-5">
									<textarea name="banner_detail" id="" class="form-control texteditor" rows="10">{{ Input::old('banner_detail') }}</textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"> Upload a banner image</label>
								<div class="col-sm-5">
									<input type="file" class="form-control" name="image"   accept="image/*" value="{{Input::old('image')}}">
									<p style="font-size: 13px; ">Please select an image upto 2MB.</p>
								</div>

							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"> Upload a banner icon</label>
								<div class="col-sm-5">
									<input type="file" class="form-control" name="icon"   accept="image/*" value="{{Input::old('icon')}}">
									<p style="font-size: 13px; ">Please select an image upto 2MB.</p>
								</div>

							</div>
							<button type="submit" class="btn btn-success w3ls-button">Submit</button> 
							<a class="btn btn-warning w3ls-button" href='{{ URL::to('admin/banner') }}'>Cancel</a>

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

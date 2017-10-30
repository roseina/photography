@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- input-forms -->
		<div class="grids">
			<div class="progressbar-heading grids-heading">
				<h2> Add photo</h2>
			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s" style="background-color: red !important;">
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
									<li><a href="{{ URL::to('admin/gallery') }}">Gallery</a></li>
									<li><a href="{{URL::to('admin/gallery/galleryphotos?id='.$gallery_id) }}">Photos</a></li>
									<li class='active'>New Photo</li>
				</ol>
			</div>
		</div>

		<div class="panel panel-widget forms-panel">
			@include('errors/errors')
			<div class="forms">
				<h3 class="title1"></h3>
				<div class="form-three widget-shadow">
					<form class="form-horizontal" action="{{ URL::to('admin/gallery/galleryphotos/savephoto')}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
						<div class="form-group">
							<label class="col-sm-2 control-label">Gallery Name</label>
							<div class="col-sm-6">
								<select name="gallery_id" class="form-control">


                            @foreach($galleries as $key => $p)
                                <option value="{{$key}}" {{ ($key == $gallery_id) ? 'selected' : '' }}>{{$p}}</option>
                            @endforeach
                        </select>

							</div>
						</div>
						 <div class="form-group">
            <label class="col-sm-2 control-label"> Upload an image file</label>
            <div class="col-sm-6">
                <input type="file" class="form-control" name="image"   accept="image/*" value="{{Input::old('image')}}">
                <p style="font-size: 13px; ">Please select an image upto 2MB.</p>
            </div>

        </div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Caption</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="caption" id="focusedinput" placeholder="Gallery name" value={{ Input::old('caption') }}>
							</div>
						</div>


						<div class="form-group">
							<label for="radio" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-8">
								<div class="radio-inline"><label><input type="radio" name='status' value="Active" > Active</label></div>
								<div class="radio-inline"><label><input type="radio" name="status" value=" Inactive"> Inactive</label></div>
							</div>
						</div>
						<button type="submit" class="btn btn-success w3ls-button">Submit</button> 
						<a class="btn btn-warning w3ls-button" href='{{ URL::to('admin/gallery/galleryphotos?id='.$gallery_id) }}'>Cancel</a>

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


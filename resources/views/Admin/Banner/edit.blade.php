@extends('Admin.master')
@section('content')
<div class="main-grid">
	<div class="agile-grids">	
		<!-- input-forms -->
		<div class="grids">
			<div class="progressbar-heading grids-heading">
				<h2> Edit Banner </h2>
			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
					<li><a href="{{ URL::to('admin/banner') }}">Banner</a></li>
					<li class="active">Edit Banner</li>

				</ol>
			</div>

			<div class="panel panel-widget forms-panel">
				@include('errors/errors')
				<div class="forms">
					<h3 class="title1"></h3>
					<div class="form-three widget-shadow">
						<form class="form-horizontal" action="{{ URL::to('admin/banner/update')}}" method="post" enctype="multipart/form-data">
							{!! csrf_field() !!}
							<div class="form-group">
							<input type="hidden" name="id" value="{{ $data->id }}">
								<label for="focusedinput" class="col-sm-2 control-label">Title</label>
								<div class="col-sm-5">
									<input type="text" class="form-control1" name="banner_title" id="focusedinput" placeholder="" value="{{$data->banner_title }}">
								</div>
							</div>

							
							<div class="form-group">
								<label class="col-sm-2 control-label">Detail</label>
								<div class="col-sm-5">
									<textarea name="banner_detail" id="" class="form-control texteditor" rows="10">{{$data->banner_detail }}</textarea>
								</div>
							</div>

							 <div class="form-group">
            <label class="col-sm-2 control-label">Upload banner image</label>
            <div class="col-sm-6">
                <input type="file" class="form-control" name="image"  accept="image/*" value="">
                


                @if($data->image != "" && file_exists(public_path('uploads/banner/images/'.$data->image)))
                <img src="{{ asset('uploads/banner/images/'.$data->image) }}"  width="162">
                <a href="{{ URL::to('admin/banner/delimage?id='.$data->id)}}" data-confirm='Are you sure you want to remove this image?' style="margin-top: 20px;" class="btn btn-danger">Remove Image </a>
                @else
                <p>No Image.</p>
                @endif
            </div>
        </div>

								 <div class="form-group">
            <label class="col-sm-2 control-label">Upload banner icon</label>
            <div class="col-sm-6">
                <input type="file" class="form-control" name="icon"  accept="image/*" value="">
                


                @if($data->image != "" && file_exists(public_path('uploads/banner/icons/'.$data->icon)))
                <img src="{{ asset('uploads/banner/icons/'.$data->icon) }}"  width="162">
                <a href="{{ URL::to('admin/banner/delimage?id='.$data->id)}}" data-confirm='Are you sure you want to remove this icon?' style="margin-top: 20px;" class="btn btn-danger">Remove Icon </a>
                @else
                <p>No Image.</p>
                @endif
            </div>
        </div>
							<button type="submit" class="btn btn-success w3ls-button">Save</button> 
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

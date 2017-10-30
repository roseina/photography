@extends('Admin.master')
@section('content')
<div class="main-grid" style="margin-bottom: 86px;">

	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Settings</h4>
				</div>
				@include('errors.errors')
				<div class="form-body">

					<form action="{{URL::to('admin/savesettings') }}" method="post"> 
					{!! csrf_field() !!}
						<div class="form-group"> 
							<label for="exampleInputPassword1">Website title</label> 
							<input type="text" name="web_title" class="form-control" id="exampleInputPassword1"  value="{{ $data->web_title }}"placeholder="website title"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputPassword1">Website Tagline</label> 
							<input type="text" name="web_tag" class="form-control" id="exampleInputPassword1"  value="{{ $data->web_tag }}" placeholder="tag line"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputEmail1">Email address</label> 
							<input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="{{ $data->email }}" placeholder="Email"> 
						</div> 

						<div class="form-group"> 
							<label for="exampleInputEmail1">Address</label> 
							<input type="text" name="address" class="form-control" id="exampleInputEmail1"  value="{{ $data->address }}" placeholder="address"> 
						</div>
						<div class="form-group"> 
							<label for="exampleInputPassword1">phone1</label> 
							<input type="text" name="phone" class="form-control" id="exampleInputPassword1"  value="{{ $data->phone }}" placeholder="phone1"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputPassword1">phone2</label> 
							<input type="text" name="phone1" class="form-control" id="exampleInputPassword1"  value="{{ $data->phone1  }}" placeholder="phone2"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputPassword1">Facebook Address</label> 
							<input type="text" name="facebook" class="form-control" id="exampleInputPassword1"  value="{{ $data->facebook }}" placeholder="facebook"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputPassword1">Twitter Address</label> 
							<input type="text" name="twitter" class="form-control" id="exampleInputPassword1"  value="{{ $data->twitter }}" placeholder="twitter"> 
						</div>
						<div class="form-group"> 
							<label for="exampleInputPassword1">Instagram</label> 
							<input type="text" name="instagram" class="form-control" id="exampleInputPassword1"  value="{{ $data->instagram }}" placeholder="instagram"> 
						</div>

										{{-- <div class="form-group"> 
											<label for="exampleInputFile">File input</label> 
											<input type="file" id="exampleInputFile"> 
											<p class="help-block">Example block-level help text here.</p> 
										</div>  --}}
										{{-- <div class="checkbox"> 
											<label> <input type="checkbox"> Check me out </label> 
										</div>  --}}
										<button type="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
				</div>
				@endsection
				@section('scripts')
				<script src="{{ URL::asset('backend/js/bootstrap.js') }}"></script>
				@endsection
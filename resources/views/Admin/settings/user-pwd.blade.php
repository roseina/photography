@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- input-forms -->
		<div class="grids">
			<div class="progressbar-heading grids-heading">
				<h2> Update Password</h2>
			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
									<li><a href="{{ URL::to('admin/settings/user') }}">User</a></li>
									<li class="active">Update Password</li>
									
								</ol>
							</div>

			<div class="panel panel-widget forms-panel">
@include('errors/errors')
				<div class="forms">
					<h3 class="title1"></h3>
					<div class="form-three widget-shadow">
						<form class="form-horizontal" action="{{ URL::to('admin/settings/user/updatePassword')}}" method="post">
					{!! csrf_field() !!}
							<div class="form-group">
							<input type="hidden" name=id value={{ $user->id }}>
								<label for="focusedinput" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="username" id="focusedinput" value={{ $user->username }}>
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label"> Old Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control1" name="oldpassword" id="focusedinput"  >
								</div>
								</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label"> New Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control1" name="password" id="focusedinput"  >
								</div>
								</div>
						
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label"> Retype New Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control1" name="confirmPassword" id="focusedinput"  >
								</div>
							</div>				    
       
							
							<button type="submit" class="btn btn-success w3ls-button">Submit</button> 
							<a class="btn btn-warning w3ls-button" href='{{ URL::to('admin/settings/user') }}'>Cancel</a>
							 
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
</body>
</html>

@extends('Admin.master')
@section('content')
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Input Forms</h2>
					</div>
					<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
								<ol class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li><a href="#">Library</a></li>
									<li class="active">Data</li>
								</ol>
							</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								
								<div class="form-body">
									<form action="#" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">Email address</label> 
											<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputPassword1">Password</label> 
											<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputFile">File input</label> 
											<input type="file" id="exampleInputFile"> 
											<p class="help-block">Example block-level help text here.</p> 
										</div> 
										<div class="checkbox"> 
											<label> <input type="checkbox"> Check me out </label> 
										</div> 
										<button type="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
					
				
					
				</div>
				<!-- //input-forms -->
			</div>
		</div>
		@endsection

@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- tables -->
		<div class="progressbar-heading grids-heading">
			<h2> Photos of {{ $gallery->name }}</h2>
			@include('errors/errors')
		</div>
		<div class="table-heading">
			<div class="right" style="float:right">
				<a href="{{ URL::to('admin/gallery/galleryphotos/addphoto?id='.$galleryId) }}" class=" btn btn-primary hvr-icon-float-away" style="margin-bottom: 10px;">Add New</a>

			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
					<li><a href="{{ URL::to('admin/gallery') }}">Gallery</a></li>
					<li class="active">Photos</li>
				</ol>
			</div>
		</div>
		
		<div class="agile-tables">
			<div class="w3l-table-info">
				

				<table id="table">
					<thead>
						<tr>
							<th>S.N</th>
							<th> Image</th>
							<th>Caption</th>
							<th>Status</th>
							<th>Action</th>

						</tr>
					</thead>

					@php $a=1; @endphp
					<tbody>
						@foreach($galleryPhotos as $row) 
						<tr>
							<td>

								{{ $a++ }}</td>
								<td>
									@if($row->image != "" && file_exists(public_path('uploads/gallery/photos/'.$row->image)))
									
									<img src="{{ asset('uploads/gallery/photos/'.$row->image) }}"  width="162">
                @else
                <p>No Image.</p>
                @endif
								</td>
								<td>{{ $row->caption}}</td>
								<td> 
									<a class="w3ls-button bg-@if($row->status=="Inactive"){{'danger'}}
										@else{{'success'}}
										@endif text-center btn" href="{{ URL::to('admin/gallery/galleryphotos/togglestatus?id='.$row->id) }}">
										@if($row->status== 'Active'){{'Active'}}
										@else {{'Inactive'}}
										@endif
									</a>

								</td>
								<td>
									<a class="w3ls-button bg-success text-center btn" href="{{URL::to('admin/gallery/galleryphotos/editphoto?id='.$row->id)}}">Edit</a>

									<a class="w3ls-button bg-danger text-center btn"  data-confirm="Are you sure you want to delete?" href='{{ URL::to('admin/gallery/galleryphotos/deletephoto?id='.$row->id) }}'>Delete</a>

								</td>

							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
			<!-- //tables -->
		</div>
	</div>


	@endsection
	@section('scripts')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('backend/css/table-style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('backend/css/basictable.css') }}" />
	<script type="text/javascript" src="{{ URL::asset('backend/js/jquery.basictable.min.js') }}"></script>
	<script src="{{ URL::asset('backend/js/bootstrap.js') }}">

	</script>
	@endsection


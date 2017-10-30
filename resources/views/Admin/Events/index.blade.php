@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- tables -->
		<div class="progressbar-heading grids-heading">
			<h2> Events</h2>
			@include('errors/errors')
		</div>
		<div class="table-heading">
			<div class="right" style="float:right">
				<a href="{{ URL::to('admin/event/addnew')}}" class=" btn btn-primary hvr-icon-float-away" style="margin-bottom: 10px;">Add New</a>

			</div>
			<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
				<ol class="breadcrumb">
					<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
					<li class="active">Events</li>
				</ol>
			</div>
		</div>
		
		<div class="agile-tables">
			<div class="w3l-table-info">
				

				<table id="table">
					<thead>
						<tr>
							<th>S.N</th>
							<th>Title</th>
							<th> Image</th>
							<th>Detail</th>
							<th>Action</th>

						</tr>
					</thead>

					@php $a=1; @endphp
					<tbody>
						@foreach($allDatas as $row) 
						<tr>
							<td>

								{{ $a++ }}</td>
								<td>{{ $row->event_title}}</td>
								<td>
									@if($row->event_image != "" && file_exists(public_path('uploads/events/images/'.$row->event_image)))
									
									<img src="{{ asset('uploads/events/images/'.$row->event_image) }}"  width="100">
                @else
                <p>No Image.</p>
                @endif
								</td>
								
								<td>{{ $row->detail }}</td>
								<td>
									<a class="w3ls-button bg-success text-center btn" href="{{URL::to('admin/event/edit?id='.$row->id)}}">Edit</a>

									<a class="w3ls-button bg-danger text-center btn"  data-confirm="Are you sure you want to delete?" href='{{ URL::to('admin/event/delete?id='.$row->id) }}'>Delete</a>

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


@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- tables -->
		<div class="progressbar-heading grids-heading">
			<h2> Gallery</h2>
@include('errors/errors')
		</div>

		<div class="table-heading">
			<div class="right" style="float:right">
				<a href="{{ URL::to('admin/gallery/newgallery') }}" class=" btn btn-primary hvr-icon-float-away" style="margin-bottom: 10px;">Add New</a>

			</div>
		</div>
		<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
									<li class="active">Gallery</li>
									
								</ol>
							</div>
		<div class="agile-tables">
			<div class="w3l-table-info">
				

				<table id="table">
					<thead>
						<tr>
							<th>S.N</th>
							<th>Gallery Name</th>
							<th>slug</th>
							<th>Status</th>
							<th>Action</th>

						</tr>
					</thead>
					@php $a=1; @endphp
					<tbody>
						@foreach($allDatas as $row) 
						<tr>
							<td>{{ $a++ }}</td>
							<td>{{ $row->name}} <br>
							 @if(!empty($row->image) && file_exists('uploads/gallery/gallery_images/'.$row->image))
              <img src="{{URL::asset('uploads/gallery/gallery_images/'.$row->image)}}" style="height:100px;width:auto;">
              @else
              <p>No Image!</p>
              @endif</td>
							<td>{{ $row->slug }}</td>
							<td> 
								<a class="w3ls-button bg-@if($row->status=="Inactive"){{'danger'}}
									@else{{'success'}}
									@endif text-center btn" href="{{ URL::to('admin/gallery/changestatus?id='.$row->id) }}">
									@if($row->status== 'Active'){{'Active'}}
									@else {{'Inactive'}}
									@endif
								</a>
                    
                    </td>
                    <td>
                    	<a class="w3ls-button bg-success text-center btn" href="{{URL::to('admin/gallery/editgallery?id='.$row->id)}}">Edit</a>

                    	<a class="w3ls-button bg-danger text-center btn"  data-confirm="Are you sure you want to delete?" href='{{ URL::to('admin/gallery/deletegallery?id='.$row->id) }}'>Delete</a>
                    	<a class="w3ls-button bg-info text-center btn" href='{{ URL::to('admin/gallery/galleryphotos?id='.$row->id) }}'>{{count($row->galleryImages)}} Photos</a>
                    	<a class="w3ls-button bg-warning text-center btn" href='{{ URL::to('admin/gallery/galleryphotos/viewphotos?id='.$row->id) }}'> View All Photos</a>
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
</body>
</html>

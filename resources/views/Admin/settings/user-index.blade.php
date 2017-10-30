@extends('Admin.master')
@section('content')

<div class="main-grid">
	<div class="agile-grids">	
		<!-- tables -->
		<div class="progressbar-heading grids-heading">
			<h2> User</h2>
@include('errors/errors')
		</div>

		<div class="table-heading">
			<div class="right" style="float:right">
				

			</div>
		</div>
		<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('admin/dashboard') }}">Home</a></li>
									<li class="active">User</li>
									
								</ol>
							</div>
		<div class="agile-tables">
			<div class="w3l-table-info">
				

				<table id="table">
					<thead>
						<tr>
							<th>S.N</th>
							<th>Name</th>
							<th>Username</th>
							<th>Action</th>

						</tr>
					</thead>
					@php $a=1; @endphp
					<tbody>
						@foreach($data as $row) 
						<tr>
							<td>{{ $a++ }}</td>
							<td>{{ $row->name}}</td>
							<td>{{ $row->username }}</td>
                    <td>
                    	<a class="w3ls-button bg-success text-center btn" href="{{URL::to('admin/settings/user/changepassword?user='.$row->id)}}">Update Password</a>
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

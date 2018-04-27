<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
	<title>GsubodhPhotography|Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="{{ URL::asset('backend/css/bootstrap.css') }}">
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ URL::asset('backend/css/custom.css') }}" type="text/css"/>

	<link href="{{ URL::asset('backend/css/style.css') }}" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{ URL::asset('backend/css/font.css') }}" type="text/css"/>
	<link href="{{ URL::asset('backend/css/font-awesome.css') }}" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<script src="{{ URL::asset('backend/js/jquery2.0.3.min.js') }}"></script>
	<script src="{{ URL::asset('backend/js/modernizr.js') }}"></script>
	<script src="{{ URL::asset('backend/js/jquery.cookie.js') }}"></script>
	<script src="{{ URL::asset('backend/js/screenfull.js') }}"></script>
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
	</script>

	<script>
		$(document).ready(function() {
			$('a[data-confirm]').click(function(ev) {
				var href = $(this).attr('href');
				if (!$('#dataConfirmModal').length) {
					$('body').append('<div id="dataConfirmModal"  class="modal modal-attr" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-primary" id="dataConfirmOK">OK</a></div></div>');
				}
				$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
				$('#dataConfirmOK').attr('href', href);
				$('#dataConfirmModal').modal({show:true});
				return false;
			});
		});
	</script>
	<!-- charts -->
	<script src="{{ URL::asset('backend/js/raphael-min.js') }}"></script>
	<script src="{{ URL::asset ('backend/js/morris.js')}}"></script>
	<link rel="stylesheet" href="{{ URL::asset('backend/css/morris.css') }}">
	<!-- //charts -->
	<!--skycons-icons-->
	<script src="{{ URL::asset('backend/js/skycons.js') }}"></script>
	<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
		var theme = $.cookie('protonTheme') || 'default';
		$('body').removeClass (function (index, css) {
			return (css.match (/\btheme-\S+/g) || []).join(' ');
		});
		if (theme !== 'default') $('body').addClass(theme);
	</script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="{{ URL::to('admin/dashboard') }}">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
						Home
					</span>
				</a>
			</li>
		</ul>

		<ul>

			<li class="has-subnav">
				<a href="{{ URL::to('admin/gallery') }}">
					<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">Gallery</span>
					
				</a>

			</li>
		</ul>
		<ul>

			<li class="has-subnav">
				<a href="{{ URL::to('admin/event')}}">
					<i class="fa fa-map-marker"></i>
					<span class="nav-text">Events</span>
					
				</a>

			</li>
		</ul>

		
		<ul>
			<li class="has-subnav">
				<a href="{{ URL::to('admin/pages') }}">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Pages</span>
					
				</a>
			</li>

			
		</ul>
		<ul>
			<li class="has-subnav">
				<a href="{{ URL::to('admin/homecomponent') }}">
					<i class="fa fa-check-square-o nav_icon" aria-hidden="true"></i>
					<span class="nav-text">Homecomponent</span>
					
				</a>
			</li>

			
		</ul>

		<ul>
			<li class="has-subnav">
				<a href="{{ URL::to('admin/banner') }}">
					<i class="fa fa-bar-chart nav_icon" aria-hidden="true"></i>
					<span class="nav-text">Banner</span>
					
				</a>
			</li>

			
		</ul>
		<ul>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-cogs"></i>
					<span class="nav-text">Settings</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="{{ URL::to('admin/settings/web') }}">
							Web Settings
						</a>
					</li>
					<li>
						<a class="subnav-text" href="{{ URL::to('admin/settings/user') }}">
							User Settings
						</a>
					</li>
					
				</ul>
			</li>
		</ul>
		<ul class="logout">
			<li>
				<a href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				<i class="icon-off nav-icon"></i>
				<span class="nav-text">
					Logout
				</span>
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
	</ul>
</nav>

<section class="wrapper scrollable">

	<nav class="user-menu">
		<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
		</a>
	</nav>
	<section class="title-bar">
		<div class="logo">
			<h1><a href="{{ URl::to('admin/dashboard') }}"><img src="{{ URL::asset('backend/images/logo.png') }}" alt="" /></a></h1>
		</div>
		<div class="full-screen">
			<section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
			</section>
		</div>
{{-- 			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div> --}}
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
									<li>
										<div class="notification_header">
											<h3>You have 3 new messages</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
									</a></li>
									<li class="odd"><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
									</a></li>
									<li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all messages</a>
										</div> 
									</li>
								</ul>
							</li>
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have 3 new notifications</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
									</a></li>
									<li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
									</a></li>
									<li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all notifications</a>
										</div> 
									</li>
								</ul>
							</li>	
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-task">
									<li>
										<div class="notification_header">
											<h3>You have 8 pending tasks</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											<div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											<div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											<div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all pending tasks</a>
										</div> 
									</li>
								</ul>
							</li>	
							<div class="clearfix"> </div>
						</ul>
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									{{-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>  --}}
									<li> <a href="{{ URL::to('admin/settings/user') }}"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out"></i> Logout</a> 
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form></li>
									</ul>
								</li>
							</ul>
						</div>


						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</section>

			@yield('content')

		</section>

		<!-- footer -->
		<div class="footer">
			<p>© 2017 All Rights Reserved Gsubodhphotography </a></p>
		</div>
		<!-- //footer -->

		@yield('scripts')


	</body>
	</html>

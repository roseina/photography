@extends('frontend.master')
@section('content')
@if($data->slug=="contact")

	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/stuck.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.1.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.mobilemenu.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/tmStickUp.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/TMForm.js"></script>
	<script src="js/sForm.js"></script>
	{{-- <script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
		});
	</script> --}}
	
</head>
<body class="" id="top">

	<div class="main">
		<!--=====================Content======================-->
		<section class="content">
			<div class="container"><div class="ic"></div>
			<div class="row">
				<div class="grid_12">
					<div class="map">
						<figure>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
						</figure>
					</div>
				</div>
				<div class="clear"></div>
				<div class="grid_5">
					<h3>Contact Info</h3>
					<p>24/7 support is on for all <span class="color1"><a href="http://www.templatemonster.com/website-templates.php" rel="nofollow">premium designs</a></span> of TemplateMonster. Free templates go without it.</p>
					<p>Need help in customization? Ask guys from <span class="color1"><a href="http://www.templatetuning.com/" rel="nofollow">TemplateTuning</a></span>.</p>
					The Company Name Inc. <br>
					9870 St Vincent Place,<br>
					Glasgow, DC 45 Fr 45.<br>
					Telephone: +1 800 603 6035<br>
					FAX: +1 800 889 9898<br>
					E-mail: <a href="#"><span class="__cf_email__" data-cfemail="cea3afa7a28eaaaba3a1a2a7a0a5e0a1bca9">[email&#160;protected]</span></a>
				</div>
				<div class="grid_6 preffix_1">
					<h3>Contact Form</h3>
					<form id="form">
						<div class="success_wrapper">
							<div class="success-message">Contact form submitted</div>
						</div>
						<label class="name">
							<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid name.</span>
						</label>
						<label class="email">
							<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid email.</span>
						</label>
						<label class="phone">
							<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid phone.</span>
						</label>
						<label class="message">
							<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*The message is too short.</span>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="reset" class="btn bt__2">Clear</a>
								<a href="#" data-type="submit" class="btn bt__2">Submit</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--==============================Bot_block=================================-->
	
</div>
<!--==============================footer=================================-->



@endif
@section('scripts')
<script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script>
@stop
@stop

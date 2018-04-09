<footer>
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<div class="footer_socials">
					<a href="{{URL::to($setting->facebook)}}" class="fa fa-facebook"></a>
					<a href="{{URL::to($setting->instagram)}}" class="fa fa-instagram"></a>
					<a href="{{URL::to($setting->twitter)}}" class="fa fa-twitter"></a>
				</div>
				<div class="copy">
					<span class="brand">{{$setting->web_title}}</span> &copy; <span id="copyright-year"></span>
					<div class="sub_copy">
						{{$setting->web_tag}}
						<br> 
						{{$setting->address}}| {{$setting->phone1}}
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
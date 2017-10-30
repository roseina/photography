<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Gsubodh Photography</title>
    
    <!-- Loading Bootstrap -->
    <link href={{URL::asset("frontend/bootstrap/css/bootstrap.css")}} rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href={{URL::asset("frontend/css/style.css")}} rel="stylesheet">
    <link href={{URL::asset("frontend/css/animate.css")}} rel="stylesheet">
    <link href={{URL::asset("frontend/css/style-magnific-popup.css")}} rel="stylesheet">
    
    <!-- Fonts -->
    <link href={{URL::asset("frontend/css/font-awesome.min.css")}} rel="stylesheet">
    <link href={{URL::asset("frontend/css/icons-main.css")}} rel="stylesheet">
    <link href={{URL::asset("frontend/css/icons-helper.css")}} rel="stylesheet">
    
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href={{URL::asset("frontend/revolution/css/settings.css")}}>
     
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href={{URL::asset("frontend/revolution/css/layers.css")}}>
    <link rel="stylesheet" type="text/css" href={{URL::asset("frontend/revolution/css/navigation.css")}}>	
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Favicon -->
    <link rel="shortcut icon" href={{URL::asset("frontend/images/favicon.ico")}}>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js")}}></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
    
</head>
<body>

    <!--begin borders -->
    <div id="border-left"></div>
    <div id="border-right"></div>
    <!--end borders -->
    
	<!--begin loader -->
    <div id="loader">
    	<div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
    	</div>
    </div>
    <!--end loader -->
   
    <!--begin header -->
    @include('frontend.header');
    @yield('content')
    @include('frontend.footer');
   

    <!--end footer -->
    

    <!-- Load JS here for greater good =============================-->
    <script src={{URL::asset("frontend/js/jquery-1.11.3.min.js")}}></script>
    <script src={{URL::asset("frontend/js/bootstrap.min.js")}}></script>
    <script src={{URL::asset("frontend/js/bootstrap-select.js")}}></script>
    <script src={{URL::asset("frontend/js/bootstrap-switch.js")}}></script>
    <script src={{URL::asset("frontend/js/jquery.magnific-popup.min.js")}}></script>
    <script src={{URL::asset("frontend/js/jquery.nav.js")}}></script>
    <script src={{URL::asset("frontend/js/jquery.scrollTo-min.js")}}></script>
    <script src={{URL::asset("frontend/js/SmoothScroll.js")}}></script>
    <script src={{URL::asset("frontend/js/wow.js")}}></script>
     
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src={{URL::asset("frontend/revolution/js/jquery.themepunch.tools.min.js")}}></script>
    <script type="text/javascript" src={{URL::asset("frontend/revolution/js/jquery.themepunch.revolution.min.js")}}></script>
    
    <script type="text/javascript" src={{URL::asset("frontend/revolution/js/extensions/revolution.extension.carousel.min.js")}}></script>
	<script type="text/javascript" src={{URL::asset("frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js")}}></script>
    <script type="text/javascript" src={{URL::asset("frontend/revolution/js/extensions/revolution.extension.kenburn.min.js")}}></script>
    <script type="text/javascript" src={{URL::asset("frontend/revolution/js/extensions/revolution.extension.navigation.min.js")}}></script>
    <script type="text/javascript" src={{URL::asset("frontend/revolution/js/extensions/revolution.extension.parallax.min.js")}}></script>
    <script type="text/javascript" src={{URL::asset("frontend/revolution/js/extensions/revolution.extension.actions.min.js")}}></script>
    
    <script type="text/javascript" src={{URL::asset("frontend/revolution/js/extensions/revolution.extension.slideanims.min.js")}}></script>

    <!-- begin custom script-->
    <script src={{URL::asset("frontend/js/custom.js")}}></script>
    <script src={{URL::asset("frontend/js/plugins.js")}}></script>
    
    
</body>
<!-- Mirrored from bogdanpreda.com/themes/tf-fable/bakery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2017 07:33:31 GMT -->
</html>
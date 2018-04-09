<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="{{URL::asset('frontend/images/favicon.ico')}}">
    <link rel="shortcut icon" href="{{URL::asset('frontend/images/favicon.ico')}}">
    @include('frontend.partials.stylesheets')
    @yield('styles')
</head>
<body class="page1" id="top">
    <!--==============================header=================================-->
    @include('frontend.partials.header')

    <div class="main">
        @yield('content')
        <!--==============================Bot_block=================================-->
        {{-- @include('frontend.partials.subscribe') --}}
    </div>
    <!--==============================footer=================================-->
    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')
</body>
</html>

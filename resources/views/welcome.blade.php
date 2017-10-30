<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gsubodh Photography</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
                overflow:hidden;
            }

            .position-ref {
                position: relative;
                background-image: url(../backend/images/camera.jpg);
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                height: 100vh;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                z-index: 99;
            }

            .content {
                text-align: center;
            }

            .content .landing img{
                height: 100vh;
                width: 100%;
                overflow:hidden;
            }

            .content .header h1{
                margin:0 auto;
                width: 100%;
            }

            .content .foorter{
                bottom: 0;
                width: 100%;
                height: 60px;
                text-align: center;
                position: fixed;
            }

            .content .foorter p{
                color: #000;
                font-weight: 600;
            }

            .content .header h1{
                margin-top: 0;
                padding-top: 100px;
                color: #000;
            }

            .links > a {
                color: #000;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer{
                bottom: 0;
                width: 100%;
                position: fixed;
            }
        </style>
    </head>
    <body>
        <div class="position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/admin/dashboard') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="header">
                    <h1>welcome to the world of photgraphy and memories</h1>
                </div>

                <div class="foorter">
                    <p>copyright @GsubodhPhotography 2017</p>
                </div>
            </div>
        </div>
    </body>
</html>

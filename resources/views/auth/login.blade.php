@extends('auth.authmaster')
@section('content')
 <div class="content2">
                <div class="grids-heading gallery-heading signup-heading">
                    <h2>Login</h2>
                </div>
                @include('errors.errors')
                <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                    <input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
                    <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                    <input type="submit" class="register" value="Login">
                </form>
                <div class="signin-text">
                    <div class="text-left">
                        <p><a href="{{ URL::to('/forgetPassword') }}"> Forgot Password? </a></p>
                    </div>
                    <div class="text-right">
                        <p><a href="signup.html"> Create New Account</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <h5>- OR -</h5>
                <div class="footer-icons">
                    <ul>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <a href="{{ URL::to('/')}}">Back To Home</a>
            </div>
            @endsection
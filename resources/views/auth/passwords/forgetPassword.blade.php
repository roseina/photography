@extends('auth.authmaster')
@section('content')
 <div class="content2">
                <div class="grids-heading gallery-heading signup-heading">
                    <h2>Forgot Password</h2>
                </div>
                @include('errors.errors')
                <form action="{{ URL::to('admin/settings/user/forgetPassword') }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="name" value="fullname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'fullname';}">

                    <input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
                    <input type="text" name="email" value="Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address';}">
                    
                    <input type="submit" class="register" value="Submit">
                </form>
                
                <a href="{{ URL::to('/')}}">Back To Home</a>
            </div>
@endsection
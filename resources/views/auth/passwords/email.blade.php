@extends('auth.authmaster')
@section('content')
 <div class="content2">
                <div class="grids-heading gallery-heading signup-heading">
                    <h2>Reset Password</h2>
                </div>
              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            </div>
                            @endif

                 <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                    <input type="text" name="email" value="Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address';}" required>
                    <input type="submit" class="register" value="Send Password Reset Link">
                </form>
            </div>
@endsection

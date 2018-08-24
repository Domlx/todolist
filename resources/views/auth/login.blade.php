@extends('layouts.app')

@section('content')


<div class="login-box">
    <div class="login-logo">
        <a href="{{ asset('/') }}"><b>{{ __('Login') }}</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ route('login') }}" aria-label="{{ __('Login') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                    <input type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <input title="{{ __('Password') }}" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>

    </div>
    <!-- /.login-box-body -->
</div>
@endsection

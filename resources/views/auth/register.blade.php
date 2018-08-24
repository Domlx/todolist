@extends('layouts.app')

@section('content')

<div class="register-box">
    <div class="register-logo">
        <a href="{{ redirect('/') }}"><b>{{ __('Register') }}</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form method="post" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
            <div class="form-group has-feedback">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
                <input id="name" placeholder="{{ __('Name') }}" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            </div>
            <div class="form-group has-feedback">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
                <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            </div>
            <div class="form-group has-feedback">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password_confirmation"  placeholder="{{ __('Confirm Password') }}">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.form-box -->
</div>
@endsection

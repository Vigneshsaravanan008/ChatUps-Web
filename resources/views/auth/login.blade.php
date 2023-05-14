@extends('layouts.login-auth.master')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="login-reg-bg">
            <div class="log-reg-area sign">
                @foreach ($errors->all('<p>:message</p>') as $input_error)
                    <span class="text-danger"> {!! $input_error !!} </span>
                @endforeach
                <h2 class="log-title">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="login_input" name="email" value="{{ old('email') }}" required />
                        <label class="control-label" for="input">Email <span class="text-danger">*</span></label><i
                            class="mtrl-select"></i>
                    </div>

                    <div class="form-group">
                        <input type="password" class="password_input" name="password" autocomplete="current-password"
                            required />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="control-label" for="input">Password <span class="text-danger">*</span></label><i
                            class="mtrl-select"></i>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" checked="checked" /><i class="check-box"></i>Always
                            Remember Me.
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" title="" class="forgot-pwd">Forgot Password?</a>
                    @endif
                    <div class="submit-btns">
                        <button class="btn btn-primary" type="submit"><span>Login</span></button>
                        <a href="{{ route('register') }}" title="" class="forgot-pwd">Don't have an Account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

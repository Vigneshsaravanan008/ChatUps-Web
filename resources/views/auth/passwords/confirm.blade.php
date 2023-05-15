@extends('web.layouts.login-auth.master')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Confirm Password') }}</div>

                    <div class="card-body">
                        Please confirm your password before continuing.

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm Password') }}
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
                <h2 class="log-title">Confirm Password</h2>
                <p> Please confirm your password before continuing.</p>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="form-group">
                        <input type="password" class="@error('password') is-invalid @enderror" required="required"
                            name="password" autocomplete="current-password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" title="" class="forgot-pwd">Forgot Password?</a>
                    @endif
                    <div class="submit-btns">
                        <button class="mtr-btn" type="submit"><span>Confirm Password</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

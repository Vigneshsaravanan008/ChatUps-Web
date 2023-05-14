@extends('layouts.login-auth.master')

@section('content')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="login-reg-bg">
            <div class="log-reg-area">
                @foreach ($errors->all('<p>:message</p>') as $input_error)
                    <span class="text-danger"> {!! $input_error !!} </span>
                @endforeach
                <h2 class="log-title">Register</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" required="required" autocomplete="off" />
                        <label class="control-label" for="input">User Name <span class="text-danger">*</span></label><i
                            class="mtrl-select"></i>
                    </div>

                    <div class="form-radio">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" checked="checked" value="1"/><i class="check-box"></i>Male
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="2" /><i class="check-box"></i>Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" required="required" name="email" />
                        <label class="control-label" for="input">Email<span class="text-danger">*</span></label><i
                            class="mtrl-select"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" required="required" name="password" required />
                        <label class="control-label" for="input">Password<span class="text-danger">*</span></label><i
                            class="mtrl-select"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" required="required" name="password_confirmation" required
                            autocomplete="new-password" />
                        <label class="control-label" for="input">Confirm Password<span
                                class="text-danger">*</span></label><i class="mtrl-select"></i>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>Accept
                                Terms & Conditions ?
                            </label>
                        </div>
                        <a href="{{ url('/') }}" title="" class="text-primary">Already have an account</a>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary btn-xl"><span>Register</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

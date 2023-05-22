@extends('web.profile.layouts.master')
@section('content')
    <div class="col-lg-6">
        <div class="central-meta">
            <div class="editing-info">
                <h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="form-group">
                        <input type="password" name="old_password" required="required">
                        <label class="control-label" for="input">Old password</label><i class="mtrl-select"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" id="input" name="new_password" required="required">
                        <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm_password" required="required">
                        <label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
                    </div>
                    <div class="submit-btns">
                        <button type="submit" class="mtr-btn"><span>Update</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

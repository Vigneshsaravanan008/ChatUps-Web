@extends('web.profile.layouts.master')
@section('content')
    <div class="col-lg-6">
        <div class="central-meta">
            <div class="editing-info">
                <h5 class="f-title"><i class="ti-info-alt"></i> Work</h5>
                <button type="button" class="btn btn-light get_work"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add</button>
                <div class="get_work_form" style="display:none">
                    <form method="POST" action="{{ route('user.work') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" id="input" required="required" name="company" />
                            <label class="control-label" for="input">Company</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" name="position" />
                            <label class="control-label" for="input">Position</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" name="city" />
                            <label class="control-label" for="input">City/Town</label><i class="mtrl-select"></i>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        <div class="form-group">
                            <textarea rows="4" id="textarea" name="description" required="required"></textarea>
                            <label class="control-label" for="textarea">Description</label><i class="mtrl-select"></i>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body d-flex card_size">
                        <img class="card-img-top" src="{{ asset('assets/images/profile/male-icon.jpg') }}"
                            alt="Card image cap">
                        <div class="work_info">
                            Working in <span class="company_name"> Sri Sairam Insitute of Technology </span> as a Project
                            Manager
                        </div>
                    </div>
                </div>

                <h5 class="f-title"><i class="ti-info-alt"></i> College</h5>
                <button type="button" class="btn btn-light"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add</button>
                <div class="get_work_form" style="display:none">
                    <form method="POST" action="{{ route('user.work') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" id="input" required="required" name="company" />
                            <label class="control-label" for="input">Company</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" name="position" />
                            <label class="control-label" for="input">Position</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" name="city" />
                            <label class="control-label" for="input">City/Town</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <textarea rows="4" id="textarea" name="description" required="required"></textarea>
                            <label class="control-label" for="textarea">Description</label><i class="mtrl-select"></i>
                        </div>
                    </form>
                </div>

                <div class="card">
                    <div class="card-body d-flex card_size">
                        <img class="card-img-top" src="{{ asset('assets/images/profile/male-icon.jpg') }}"
                            alt="Card image cap">
                        <div class="work_info">
                            Working in <span class="company_name"> Sri Sairam Insitute of Technology </span> as a Project
                            Manager
                        </div>
                    </div>
                </div>

                <h5 class="f-title"><i class="ti-info-alt"></i> High School</h5>
                <button type="button" class="btn btn-light"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add</button>
                <div class="get_work_form" style="display:none">
                    <form method="POST" action="{{ route('user.work') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" id="input" required="required" name="company" />
                            <label class="control-label" for="input">Company</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" name="position" />
                            <label class="control-label" for="input">Position</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" name="city" />
                            <label class="control-label" for="input">City/Town</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="file" required="required" name="city" />
                            <label class="control-label" for="input">Image</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <textarea rows="4" id="textarea" name="description" required="required"></textarea>
                            <label class="control-label" for="textarea">Description</label><i class="mtrl-select"></i>
                        </div>
                    </form>
                </div>

                <div class="card">
                    <div class="card-body d-flex card_size">
                        <img class="card-img-top" src="{{ asset('assets/images/profile/male-icon.jpg') }}"
                            alt="Card image cap">
                        <div class="work_info">
                            Working in <span class="company_name"> Sri Sairam Insitute of Technology </span> as a Project
                            Manager
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('javascript')
    <script>
        $("document").ready(function() {
            $(".get_work").on('click', function() {
                $(".get_work_form").css('display', 'block');
                $(".get_work").addClass('d-none');
            })
        })
    </script>
@endpush

@extends('web.profile.layouts.master')
@section('content')
    <div class="col-lg-6">
        <div class="central-meta">
            <div class="editing-info">
                <h5 class="f-title"><i class="ti-info-alt"></i> Overview
                </h5>
                @include('web.layouts.alert')
                @if ($education == null)
                    <button type="button" class="btn btn-outline-primary get_college"><i class="fa fa-plus-circle"
                            aria-hidden="true"></i>
                        Studies</button>

                    <div class="get_college_form" style="display:none">
                        <form method="POST" action="{{ route('user.college') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <input type="text" id="input" required="required" name="college" />
                                <label class="control-label" for="input">College</label><i class="mtrl-select"></i>
                            </div>

                            <div class="row">
                                <div class="form-group half">
                                    <select name="from_year" id="from_year">
                                        <option value="">From Year</option>
                                        @for ($i = date('Y'); $i >= Auth::user()->year; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group half">
                                    <select name="to_year" id="to_year">
                                        <option value="">To Year</option>
                                        @for ($j = date('Y'); $j >= Auth::user()->year; $j--)
                                            <option value="{{ $j }}">{{ $j }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="graduate" class="graduate" value="1"
                                        checked="checked"><i class="check-box"></i>Graduated
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="text" required="required" name="degree" />
                                <label class="control-label" for="input">Degree</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group custom-file">
                                <input type="file" required="required" class="custom-file-input" name="image">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                            <div class="form-group">
                                <input type="text" required="required" name="city" />
                                <label class="control-label" for="input">City/Town</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <textarea rows="4" id="textarea" name="description" required="required"></textarea>
                                <label class="control-label" for="textarea">Description</label><i class="mtrl-select"></i>
                            </div>
                            <div class="submit-btns mb-3">
                                <button type="submit" class="mtr-btn">
                                    <span>Save</span>
                                </button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="d-flex work_info">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <div class="ml-3 mb-1">
                            Studied {{ $education->degree }} at <span class="company_name"> {{ $education->college }},
                                {{ $education->city }}
                            </span>
                        </div>
                    </div>
                @endif
                <div class="d-flex work_info">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <div class="ml-3 mb-1">
                        Lives in <span class="company_name">Chennai</span>
                    </div>
                </div>

                <div class="d-flex work_info">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="ml-3 mb-1">
                        From in <span class="company_name">Chidambaram</span>
                    </div>
                </div>
                @if (Auth::user()->relationship_status == null)
                    <button type="button" class="btn btn-sm btn-outline-primary get_status"><i class="fa fa-plus-circle"
                            aria-hidden="true"></i> Add Relationship Status</button>
                @else
                    <div class="d-flex work_info">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="ml-3 mb-1">
                            {{ Auth::user()->relationship_status }}
                        </div>
                        
                    </div>
                @endif
                <div class="get_status_form" style="display:none">
                    <form method="POST" action="{{ route('user.relationship_status') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="text" id="input" required="required" name="relationship_status" />
                            <label class="control-label" for="input">Relationship Status</label><i
                                class="mtrl-select"></i>
                        </div>

                        <div class="submit-btns mb-3">
                            <button type="submit" class="mtr-btn">
                                <span>Save</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascript')
    <script>
        $(".get_college").on('click', function() {
            $(".get_college_form").css('display', 'block');
            $(".get_college").addClass('d-none');
        })

        $(".get_status").on('click', function() {
            $(".get_status_form").css('display', 'block');
            $(".get_status").addClass('d-none');
        }
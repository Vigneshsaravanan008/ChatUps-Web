@extends('web.profile.layouts.master')
@section('content')
    <div class="col-lg-6">
        <div class="central-meta">
            @include('web.layouts.alert')
            <div class="editing-info">
                <h5 class="f-title"><i class="ti-info-alt"></i> Work</h5>
                <button type="button" class="btn btn-light get_work"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add</button>
                <div class="get_work_form" style="display:none">
                    <form method="POST" action="{{ route('user.work') }}" enctype="multipart/form-data">
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
                        <div class="form-group custom-file">
                            <input type="file" required="required" class="custom-file-input" name="image">
                            <label class="custom-file-label">Company</label>
                        </div>
                        <div class="form-group">
                            <textarea rows="4" id="textarea" name="description"></textarea>
                            <label class="control-label" for="textarea">Description</label><i class="mtrl-select"></i>
                        </div>
                        <span>Time Period</span>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="work_interval" value="1" checked="checked"><i
                                    class="check-box"></i>I
                                currently work here
                            </label>
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
                            <div class="form-group half to_year d-none">
                                <select name="to_year" id="to_year">
                                    <option value="">To Year</option>
                                    @for ($j = date('Y'); $j >= Auth::user()->year; $j--)
                                        <option value="{{ $j }}">{{ $j }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="submit-btns mb-3">
                            <button type="submit" class="mtr-btn">
                                <span>Save</span>
                            </button>
                        </div>
                    </form>
                </div>
                @foreach ($works as $work)
                    <div class="card">
                        <div class="card-body d-flex card_size">
                            <img class="card-img-top" src="{{ asset('storage/' . $work->image) }}" alt="Card image cap">
                            <div class="work_info">
                                Working in <span class="company_name"> {{ $work->company }} </span> as a
                                {{ $work->position }}
                            </div>
                        </div>
                    </div>
                @endforeach
                <h5 class="f-title"><i class="ti-info-alt"></i> College</h5>
                <button type="button" class="btn btn-light get_college"> <i class="fa fa-plus-circle"
                        aria-hidden="true"></i>
                    Add</button>
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

                {{-- <div class="card">
                    <div class="card-body d-flex card_size">
                        <img class="card-img-top" src="{{ asset('assets/images/profile/male-icon.jpg') }}"
                            alt="Card image cap">
                        <div class="work_info">
                            Working in <span class="company_name"> Sri Sairam Insitute of Technology </span> as a Project
                            Manager
                        </div>
                    </div>
                </div> --}}

                @foreach ($colleges as $college)
                    <div class="card">
                        <div class="card-body d-flex card_size">
                            <img class="card-img-top" src="{{ asset('storage/' . $college->image) }}"
                                alt="Card image cap">
                            <div class="work_info">
                                Studied {{ $college->degree }} at <span class="company_name"> {{ $college->college }}, {{$education->city}}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

                <h5 class="f-title"><i class="ti-info-alt"></i> High School</h5>
                <button type="button" class="btn btn-light get_school"><i class="fa fa-plus-circle"
                        aria-hidden="true"></i>
                    Add</button>
                <div class="get_school_form" style="display:none">
                    <form method="POST" action="{{ route('user.school') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="text" id="input" required="required" name="school" />
                            <label class="control-label" for="input">School</label><i class="mtrl-select"></i>
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

                @foreach ($schools as $school)
                    <div class="card">
                        <div class="card-body d-flex card_size">
                            <img class="card-img-top" src="{{ asset('storage/' . $school->image) }}"
                                alt="Card image cap">
                            <div class="work_info">
                                Studied at <span class="company_name"> {{ $school->school }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

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

            $(".work_interval").on('click', function() {
                var value = this.checked ? 1 : 0;
                (value == 1) ? $(".to_year").addClass('d-none'): $(".to_year").removeClass('d-none');
                $(".work_interval").val(value);
            })

            $(".get_college").on('click', function() {
                $(".get_college_form").css('display', 'block');
                $(".get_college").addClass('d-none');
            })

            $(".get_school").on('click', function() {
                $(".get_school_form").css('display', 'block');
                $(".get_school").addClass('d-none');
            })

            $(".graduate").on('click change', function() {
                var value = this.checked ? 1 : 0;
                $(".graduate").val(value);
            })
        })
    </script>
@endpush

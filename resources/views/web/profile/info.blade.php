@extends('web.profile.layouts.master')
@section('content')
    <div class="col-lg-6">
        <div class="central-meta">
            <div class="editing-info">
                <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information
                </h5>
                @include('web.layouts.alert')
                <form method="POST" action="{{ route('user.update') }}">
                    @csrf
                    <div class="form-group half">
                        <input type="text" id="input" name="name" required="required"
                            value="{{ Auth::user()->name }}" />
                        <label class="control-label" for="input">Name</label><i class="mtrl-select"></i>
                    </div>

                    <div class="form-group half">
                        <input type="text" required="required" name="email" value="{{ Auth::user()->email }}" />
                        <label class="control-label" for="input">Email@</label><i class="mtrl-select"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" required="required" name="passion" value="{{ Auth::user()->passion }}" />
                        <label class="control-label" for="input">passion</label><i class="mtrl-select"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" required="required" name="phone_no" value="{{ Auth::user()->phone_no }}" />
                        <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
                    </div>
                    <div class="dob">
                        <div class="form-group">
                            <select name="day">
                                <option value="">Day</option>
                                <option {{ Auth::user()->day == 1 ? 'selected' : '' }}>1</option>
                                <option {{ Auth::user()->day == 2 ? 'selected' : '' }}>2</option>
                                <option {{ Auth::user()->day == 3 ? 'selected' : '' }}>3</option>
                                <option {{ Auth::user()->day == 4 ? 'selected' : '' }}>4</option>
                                <option {{ Auth::user()->day == 5 ? 'selected' : '' }}>5</option>
                                <option {{ Auth::user()->day == 6 ? 'selected' : '' }}>6</option>
                                <option {{ Auth::user()->day == 7 ? 'selected' : '' }}>7</option>
                                <option {{ Auth::user()->day == 8 ? 'selected' : '' }}>8</option>
                                <option {{ Auth::user()->day == 9 ? 'selected' : '' }}>9</option>
                                <option {{ Auth::user()->day == 10 ? 'selected' : '' }}>10
                                </option>
                                <option {{ Auth::user()->day == 11 ? 'selected' : '' }}>11
                                </option>
                                <option {{ Auth::user()->day == 12 ? 'selected' : '' }}>12
                                </option>
                                <option {{ Auth::user()->day == 13 ? 'selected' : '' }}>13
                                </option>
                                <option {{ Auth::user()->day == 14 ? 'selected' : '' }}>14
                                </option>
                                <option {{ Auth::user()->day == 15 ? 'selected' : '' }}>15
                                </option>
                                <option {{ Auth::user()->day == 16 ? 'selected' : '' }}>16
                                </option>
                                <option {{ Auth::user()->day == 17 ? 'selected' : '' }}>17
                                </option>
                                <option {{ Auth::user()->day == 18 ? 'selected' : '' }}>18
                                </option>
                                <option {{ Auth::user()->day == 19 ? 'selected' : '' }}>19
                                </option>
                                <option {{ Auth::user()->day == 20 ? 'selected' : '' }}>20
                                </option>
                                <option {{ Auth::user()->day == 21 ? 'selected' : '' }}>21
                                </option>
                                <option {{ Auth::user()->day == 22 ? 'selected' : '' }}>22
                                </option>
                                <option {{ Auth::user()->day == 23 ? 'selected' : '' }}>23
                                </option>
                                <option {{ Auth::user()->day == 24 ? 'selected' : '' }}>24
                                </option>
                                <option {{ Auth::user()->day == 25 ? 'selected' : '' }}>25
                                </option>
                                <option {{ Auth::user()->day == 26 ? 'selected' : '' }}>26
                                </option>
                                <option {{ Auth::user()->day == 27 ? 'selected' : '' }}>27
                                </option>
                                <option {{ Auth::user()->day == 28 ? 'selected' : '' }}>28
                                </option>
                                <option {{ Auth::user()->day == 29 ? 'selected' : '' }}>29
                                </option>
                                <option {{ Auth::user()->day == 30 ? 'selected' : '' }}>30
                                </option>
                                <option {{ Auth::user()->day == 31 ? 'selected' : '' }}>31
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="month">
                                <option value="">Month</option>
                                <option value="1" {{ Auth::user()->month == 1 ? 'selected' : '' }}>Jan</option>
                                <option value="2" {{ Auth::user()->month == 2 ? 'selected' : '' }}>Feb</option>
                                <option value="3" {{ Auth::user()->month == 3 ? 'selected' : '' }}>Mar</option>
                                <option value="4" {{ Auth::user()->month == 4 ? 'selected' : '' }}>Apr</option>
                                <option value="5" {{ Auth::user()->month == 5 ? 'selected' : '' }}>May</option>
                                <option value="6" {{ Auth::user()->month == 6 ? 'selected' : '' }}>Jun</option>
                                <option value="7" {{ Auth::user()->month == 7 ? 'selected' : '' }}>Jul</option>
                                <option value="8" {{ Auth::user()->month == 8 ? 'selected' : '' }}>Aug</option>
                                <option value="9" {{ Auth::user()->month == 9 ? 'selected' : '' }}>Sep</option>
                                <option value="10" {{ Auth::user()->month == 10 ? 'selected' : '' }}>Oct</option>
                                <option value="11" {{ Auth::user()->month == 11 ? 'selected' : '' }}>Nov</option>
                                <option value="12" {{ Auth::user()->month == 12 ? 'selected' : '' }}>Dec</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="year">
                                <option value="">Year</option>
                                @for ($i = 1950; $i <= date('Y'); $i++)
                                    <option value="{{ $i }}" {{ Auth::user()->year == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="form-radio">
                        <div class="radio">
                            <label>
                                <input type="radio" value="1" {{ Auth::user()->gender == 1 ? 'checked' : '' }}
                                    name="gender"><i class="check-box"></i>Male
                            </label>
                            <div class="radio">
                            </div>
                            <label>
                                <input type="radio" name="gender" value="2"
                                    {{ Auth::user()->gender == 2 ? 'checked' : '' }}><i class="check-box"></i>Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group"> {{-- Code Evaluation --}}
                        <input type="text" required="required" name="city" value="{{ Auth::user()->city }}" />
                        <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
                    </div>

                    <div class="form-group">
                        <textarea rows="4" id="textarea" required="required" name="about_me">{{ Auth::user()->about_me }}</textarea>
                        <label class="control-label" for="textarea">About Me</label><i class="mtrl-select"></i>
                    </div>
                    <div class="submit-btns">
                        <button type="submit" class="mtr-btn"><span>Save</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('javascript')
    <script>
        $(".image_upload").on('change', function() {
            $(".image_upload_form").submit();
        })
    </script>
@endpush

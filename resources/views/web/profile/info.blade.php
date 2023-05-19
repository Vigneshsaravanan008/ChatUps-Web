@extends('web.profile.layouts.master')
@section('content')
    <section>
        <div class="feature-photo">
            <figure><img src="{{ asset('assets/images/resources/timeline-1.jpg') }}" alt=""></figure>
            <div class="add-btn">
                <span>1205 followers</span>
                <a href="#" title="" data-ripple="">Add Friend</a>
            </div>
            <form class="edit-phto">
                <i class="fa fa-camera-retro"></i>
                <label class="fileContainer">
                    Edit Cover Photo
                    <input type="file" />
                </label>
            </form>
            <div class="container-fluid">
                <div class="row merged">
                    <div class="col-lg-2 col-sm-3">
                        <div class="user-avatar">
                            <figure>
                                <img src="{{ Auth::user()->image == null ? asset('assets/images/profile/male-icon.jpg') : asset('uploads/' . Auth::user()->image) }}"
                                    alt="">
                                <form class="edit-phto">
                                    <i class="fa fa-camera-retro"></i>
                                    <label class="fileContainer">
                                        Edit Display Photo
                                        <input type="file" />
                                    </label>
                                </form>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9">
                        <div class="timeline-info">
                            <ul>
                                <li class="admin-name">
                                    <h5>{{ Auth::user()->name }}</h5>
                                    <span>{{ Auth::user()->passion == null ? 'Forward' : '' }}</span>
                                </li>
                                <li>
                                    <a class="" href="time-line.html" title="" data-ripple="">time
                                        line</a>
                                    <a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
                                    <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
                                    <a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
                                    <a class="" href="groups.html" title="" data-ripple="">Groups</a>
                                    <a class="" href="about.html" title="" data-ripple="">about</a>
                                    <a class="active" href="#" title="" data-ripple="">more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top area -->

    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            @include('web.profile.layouts.sidebar-right')
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="editing-info">
                                        <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information
                                        </h5>

                                        <form method="POST" action="{{ route('user.update') }}">
                                            @csrf
                                            <div class="form-group half">
                                                <input type="text" id="input" name="name" required="required"
                                                    value="{{ Auth::user()->name }}" />
                                                <label class="control-label" for="input">Name</label><i
                                                    class="mtrl-select"></i>
                                            </div>

                                            <div class="form-group half">
                                                <input type="text" required="required" name="email"
                                                    value="{{ Auth::user()->email }}" />
                                                <label class="control-label" for="input">Email@</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="required" name="passion"
                                                    value="{{ Auth::user()->passion }}" />
                                                <label class="control-label" for="input">passion</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="required" name="phone_no"
                                                    value="{{ Auth::user()->phone_no }}" />
                                                <label class="control-label" for="input">Phone No.</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="dob">
                                                <div class="form-group">
                                                    <select name="day">
                                                        <option value="Day">Day</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="month">
                                                        <option value="month">Month</option>
                                                        <option value="1">Jan</option>
                                                        <option value="2">Feb</option>
                                                        <option value="3">Mar</option>
                                                        <option value="4">Apr</option>
                                                        <option value="5">May</option>
                                                        <option value="6">Jun</option>
                                                        <option value="7">Jul</option>
                                                        <option value="8">Aug</option>
                                                        <option value="9">Sep</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Dec</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="year">
                                                        <option value="year">Year</option>
                                                        @for ($i = 1950; $i <= date('Y'); $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-radio">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio"
                                                            {{ Auth::user()->gender == 1 ? 'checked' : '' }}
                                                            name="radio"><i class="check-box"></i>Male
                                                    </label>
                                                    <div class="radio">
                                                    </div>
                                                    <label>
                                                        <input type="radio" name="radio"
                                                            {{ Auth::user()->gender == 2 ? 'checked' : '' }}><i
                                                            class="check-box"></i>Female
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="required" />
                                                <label class="control-label" for="input">City</label><i
                                                    class="mtrl-select"></i>
                                            </div>

                                            <div class="form-group">
                                                <textarea rows="4" id="textarea" required="required"></textarea>
                                                <label class="control-label" for="textarea">About Me</label><i
                                                    class="mtrl-select"></i>
                                            </div>
                                            <div class="submit-btns">
                                                <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                                <button type="button" class="mtr-btn"><span>Update</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @include('web.profile.layouts.sidebar-left')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

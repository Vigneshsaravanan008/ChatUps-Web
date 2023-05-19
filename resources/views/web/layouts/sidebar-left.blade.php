<div class="col-lg-3">
    <aside class="sidebar static">
        {{-- <div class="widget">
            <h4 class="widget-title">Shortcuts</h4>
            <ul class="naves">
                <li>
                    <i class="ti-clipboard"></i>
                    <a href="newsfeed.html" title="">News feed</a>
                </li>
                <li>
                    <i class="ti-mouse-alt"></i>
                    <a href="inbox.html" title="">Inbox</a>
                </li>
                <li>
                    <i class="ti-files"></i>
                    <a href="fav-page.html" title="">My pages</a>
                </li>
                <li>
                    <i class="ti-user"></i>
                    <a href="timeline-friends.html" title="">friends</a>
                </li>
                <li>
                    <i class="ti-image"></i>
                    <a href="timeline-photos.html" title="">images</a>
                </li>
                <li>
                    <i class="ti-video-camera"></i>
                    <a href="timeline-videos.html" title="">videos</a>
                </li>
                <li>
                    <i class="ti-comments-smiley"></i>
                    <a href="messages.html" title="">Messages</a>
                </li>
                <li>
                    <i class="ti-bell"></i>
                    <a href="notifications.html" title="">Notifications</a>
                </li>
                <li>
                    <i class="ti-share"></i>
                    <a href="people-nearby.html" title="">People Nearby</a>
                </li>
                <li>
                    <i class="fa fa-bar-chart-o"></i>
                    <a href="insights.html" title="">insights</a>
                </li>
                <li>
                    <i class="ti-power-off"></i>
                    <a href="landing.html" title="">Logout</a>
                </li>
            </ul>
        </div><!-- Shortcuts --> --}}
        <div class="inbox-navigation">
            <div class="inbox-panel-head">
                <img alt=""
                    src="{{ Auth::user()->image == null ? asset('assets/images/profile/male-icon.jpg') : asset('uploads/' . Auth::user()->image) }}">
                <h1><i>{{ Auth::user()->name }}</i></h1>
                <h5><i>{{ Auth::user()->passion == null ? 'Forward' : Auth::user()->passion }}</i></h5>
                {{-- <a title="" href="edit-profile-basic.html"><i class="fa fa-user"></i>Profile</a>
                <a title="" href="edit-account-setting.html"><i class="fa fa-cog"></i>Setting</a> --}}
                {{-- <ul>
                    <li><a class="compose-btn" title="" href="#"><i class="fa fa-user"></i> View Profile</a>
                    </li>
                </ul> --}}
            </div><!-- Inbox Panel Head -->
            <ul>
                <li class="active"><a title=""><i class="fa fa-inbox"></i>Inbox</a><span>4</span></li>
                <li><a title=""><i class="fa fa-paper-plane-o"></i>Draft</a></li>
                <li><a title=""><i class="fa fa-repeat"></i>Outbox</a><span>6</span></li>
                <li><a title=""><i class="fa fa-plane"></i>Sent</a></li>
                <li><a title=""><i class="fa fa-trash-o"></i>Trash</a></li>
            </ul>
            <div class="flaged">
                <h3><i class="fa fa-flag"></i>FLAGGED</h3>
                <ul>
                    <li><a title="" href="#"><i style="color:#ff5c5c;" class="fa fa-tag"></i>Family</a></li>
                    <li><a title="" href="#"><i style="color:#3ac1e3;" class="fa fa-tag"></i>Friends</a>
                    </li>
                    <li><a title="" href="#"><i style="color:#f3d547;" class="fa fa-tag"></i>Private</a>
                    </li>
                    <li><a title="" href="#"><i style="color:#b447f3;" class="fa fa-tag"></i>Office
                            Staff</a></li>
                </ul>
            </div>
        </div>
        <div class="widget">
            <h4 class="widget-title">Recent Activity</h4>
            <ul class="activitiez">
                <li>
                    <div class="activity-meta">
                        <i>10 hours Ago</i>
                        <span><a href="#" title="">Commented on Video posted </a></span>
                        <h6>by <a href="time-line.html">black demon.</a></h6>
                    </div>
                </li>
                <li>
                    <div class="activity-meta">
                        <i>30 Days Ago</i>
                        <span><a href="#" title="">Posted your status. “Hello guys, how are you?”</a></span>
                    </div>
                </li>
                <li>
                    <div class="activity-meta">
                        <i>2 Years Ago</i>
                        <span><a href="#" title="">Share a video on her timeline.</a></span>
                        <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                    </div>
                </li>
            </ul>
        </div><!-- recent activites -->
        <div class="widget stick-widget">
            <h4 class="widget-title">Who's follownig</h4>
            <ul class="followers ps-container ps-theme-default ps-active-y"
                data-ps-id="6b0982d9-0e6a-26d9-1c31-94a8e443456d">
                <li>
                    <figure><img src="{{ asset('assets/images/resources/friend-avatar2.jpg') }}" alt="">
                    </figure>
                    <div class="friend-meta">
                        <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                        <a href="#" title="" class="underline">Add Friend</a>
                    </div>
                </li>
                <li>
                    <figure><img src="{{ asset('assets/images/resources/friend-avatar4.jpg') }}" alt="">
                    </figure>
                    <div class="friend-meta">
                        <h4><a href="time-line.html" title="">Issabel</a></h4>
                        <a href="#" title="" class="underline">Add Friend</a>
                    </div>
                </li>
                <li>
                    <figure><img src="{{ asset('assets/images/resources/friend-avatar6.jpg') }}" alt="">
                    </figure>
                    <div class="friend-meta">
                        <h4><a href="time-line.html" title="">Andrew</a></h4>
                        <a href="#" title="" class="underline">Add Friend</a>
                    </div>
                </li>
                <li>
                    <figure><img src="{{ asset('assets/images/resources/friend-avatar8.jpg') }}" alt="">
                    </figure>
                    <div class="friend-meta">
                        <h4><a href="time-line.html" title="">Sophia</a></h4>
                        <a href="#" title="" class="underline">Add Friend</a>
                    </div>
                </li>
                <li>
                    <figure><img src="{{ asset('assets/images/resources/friend-avatar3.jpg') }}" alt="">
                    </figure>
                    <div class="friend-meta">
                        <h4><a href="time-line.html" title="">Allen</a></h4>
                        <a href="#" title="" class="underline">Add Friend</a>
                    </div>
                </li>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                    <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps-scrollbar-y-rail" style="top: 0px; height: 260px; right: 0px;">
                    <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 187px;"></div>
                </div>
            </ul>
        </div><!-- who's following -->
    </aside>
</div>

<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget stick-widget">
            <h4 class="widget-title">About</h4>
            <ul class="naves">
                <li class="active">
                    <i class="ti-info-alt"></i>
                    <a href="{{ route('user.overview', ['slug' => Auth::user()->name]) }}" title="Profile">Overview</a>
                </li>
                <li>
                    <i class="ti-mouse-alt"></i>
                    <a href="{{ route('user.education') }}" title="Education">Education &
                        Work</a>
                </li>
                <li>
                    <i class="ti-heart"></i>
                    <a href="edit-interest.html" title="">My interests</a>
                </li>
                <li>
                    <i class="ti-settings"></i>
                    <a href="edit-account-setting.html" title="">account
                        setting</a>
                </li>
                <li>
                    <i class="ti-lock"></i>
                    <a href="{{ route('change.password') }}" title="">change password</a>
                </li>
            </ul>
        </div>
    </aside>
</div>

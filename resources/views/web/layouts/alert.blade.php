@if (session()->has('primary'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('primary') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (session()->has('secondary'))
    <div class="alert alert-secondary" role="alert">
        {{ Session::get('secondary') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (session()->has('danger'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('danger') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (session()->has('warning'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (session()->has('info'))
    <div class="alert alert-info" role="alert">
        {{ Session::get('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (session()->has('light'))
    <div class="alert alert-light" role="alert">
        {{ Session::get('light') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (session()->has('dark'))
    <div class="alert alert-dark" role="alert">
        {{ Session::get('dark') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

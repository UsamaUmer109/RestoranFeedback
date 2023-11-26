<!-- partial:partials/_navbar.blade.php -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ url('') }}"><i class="fa fa-utensils me-3"></i>Restoran</a>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">

        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{ asset('admin/images/admin/profile.png') }}" alt="profile"/>
                        {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    @guest
                        @if (Route::has('login'))
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="ti-login text-primary"></i>
                                Login
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">
                                <i class="ti-form text-primary"></i>
                                Register
                            </a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <i class="ti-power-off text-primary"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endguest

                </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-flex">
                <a class="nav-link" href="#">
                    <i class="icon-ellipsis"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->

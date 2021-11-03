<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-left" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="c-icon c-icon-lg icon-menu"></i>
    </button>
    <div class="row d-lg-none mx-auto text-center">
        <div class="col-sm-12">
            <a class="c-header-brand" href="#">
                <img src="{{ asset('img/profile/logo.png') }}" class="img-fluid" style="max-height:50px">
            </a>
        </div>
    </div>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="c-icon c-icon-lg icon-menu"></i>
    </button>
    <ul class="c-header-nav mr-auto">
        <!-- <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li> -->
        @include('layouts.partials-coreui.navbar')
    </ul>
    <ul class="c-header-nav mr-4">
        <li class="c-header-nav-item d-md-down-none mx-2">
            Selamat datang <b>{{ (Auth::user() != null ? Auth::user()->name : 'Brow' ) }}</b>
        </li>
        <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('img/profile/profile.png') }}" alt="profile"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                <a class="dropdown-item mt-2" href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                    <i class="c-icon mr-2 fas fa-sign-out-alt">
                    </i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    @include('layouts.partials-coreui.bcrum')
</header>
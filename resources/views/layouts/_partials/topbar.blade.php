<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">


        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <span class="pro-user-name ml-1">
                    Relatório emitido 10/02/2020 as 15h
                </span>
            </a>

        </li>

    </ul>

    <div class="logo-box">
        <a href="{{route('home')}}" class="logo text-center">
            <span class="logo-lg">
                {{-- <img src="assets/images/logo-light.png" alt="" height="16"> --}}
                <span class="logo-lg-text-light">Health Check</span>
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">X</span> -->
                <img src="{{ URL::asset('assets/images/oi/logo_oi.png') }}" alt="" height="30">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </li>
    </ul>
</div>
<!-- end Topbar -->

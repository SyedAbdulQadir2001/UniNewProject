
<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/dashboard"><img src="{{ asset("assets/images/logo.png") }}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="{{asset("assets/images/logo-mini.png")}}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="{{ asset("assets/images/faces/face1.jpg") }} " alt="image">
                        <span class="availability-status online"></span>
                    </div>
                    <div style="width: 140px" class="nav-profile-text overflow-hidden ">
                        <p  class="mb-1 text-black text-truncate">{{ $user->name }}</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item " href="/profile">
                        <i class="mdi mdi-account-settings me-2 text-primary"></i> Profile </a>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/signout">
                        <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                </div>
            </li>

            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="/signout">
                    <i class="mdi mdi-power"></i>
                </a>

            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

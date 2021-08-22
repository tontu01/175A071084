<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <a class="navbar-brand" href="{{ backendRouter('student.list') }}">
                <b class="logo-icon ps-2">
                    <img src="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/images/logo-icon.png"
                         alt="homepage" class="light-logo" width="25">
                </b>
                <span class="logo-text">
                    <img src="https://demos.wrappixel.com/free-admin-templates/bootstrap/matrix-bootstrap-free/assets/images/logo-text.png"
                         alt="homepage" class="light-logo">
                </span>
            </a>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
               data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
               aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu font-24"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('backend/image/user/1.jpg') }}" alt="user" class="rounded-circle" width="31">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                            Email: {{ backendCurrentUser()->email }}
                        </a>
                        <a class="dropdown-item" href="{{ backendRouter('logout') }}"><i class="ti-user m-r-5 m-l-5"></i>Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

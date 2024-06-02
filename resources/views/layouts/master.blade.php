<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PATRIA QMS | Home</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/qc-logo-color.png') }}" />
    @include('layouts.style-area')
    @yield('mystyle')
</head>

<body>
    <div class="nk-app-root">
        <!-- main -->
        <div class="nk-main ">
            <!-- sidebar -->
            @include('layouts.sidebar')
            <!-- sidebar -->
            <!-- wrap -->
            <div class="nk-wrap ">
                <!-- main header -->
                <div class="nk-header is-light nk-header-fixed is-light">
                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1 me-3">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset('assets/img/qc-logo-white.png') }}"
                                        alt="logo">
                                    <img class="logo-dark logo-img" src="{{ asset('assets/img/qc-logo-color.png') }}"
                                        alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-menu is-light">
                                <div class="nk-header-menu-inner">
                                    <!-- Menu -->
                                    <ul class="nk-menu nk-menu-main">
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Dashboards</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/index.html" class="nk-menu-link">
                                                        <span class="nk-menu-text">Default Dashboard</span>
                                                    </a>
                                                </li><!-- .nk-menu-item -->
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                    </ul>
                                    <!-- Menu -->
                                </div>
                            </div><!-- .nk-header-menu -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    @include('layouts.notification')
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">infoftnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em
                                                                class="icon ni ni-user-alt"></em><span>Profile</span></a>
                                                    </li>
                                                    <li><a href="html/user-profile-setting.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Go to
                                                                Webportal</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em
                                                                class="icon ni ni-signout"></em><span>Logout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header -->
                <!-- content -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-xl">
                        <div class="nk-content-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- content -->
                <!-- footer -->
                <div class="nk-footer">
                    <div class="container-xl wide-xl">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"><a href="https://www.patria.co.id/"
                                    target="_blank">PATRIA</a> &copy; 2024 Quality Management System.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
            </div>
            <!-- wrap -->
        </div>
        <!-- main -->
    </div>

    @include('layouts.script-area')
    @yield('myscript')
</body>

</html>

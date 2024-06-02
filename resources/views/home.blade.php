<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PATRIA QMS | Home</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/qc-logo-color.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-home.css') }}">
    @yield('mystyle')
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="navbar-qms">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/qc-logo-white.png') }}" alt="Avatar Logo" style="width:30px;"
                    class="rounded-pill me-1">
                <span class="align-middle">PATRIA QMS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome! {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Go to Webportal</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0)"
                                    onclick="document.getElementById('logout-form').submit()">Logout</a></li>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="w-100 h-100">
        <div class="div-top d-flex align-items-end">
            <div class="bg-shape">
                <img src="{{ asset('assets/img/bg-shape.png') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <div class="bg-white div-bottom d-flex flex-column gap-3">
            <div class="container">
                <div class="d-flex justify-content-center gap-4 flex-wrap">
                    <a href="{{ url('dashboard-lm') }}" class="card-app">
                        <div class="mb-2 card-app-body">
                            <img src="{{ asset('assets/img/vehicle.png') }}" alt="" class="img" />
                        </div>
                        <span class="fw-bold">PLANT 1</span>
                    </a>
                    <a href="" class="card-app">
                        <div class="mb-2 card-app-body">
                            <img src="{{ asset('assets/img/remanufacturing.png') }}" alt="" class="img" />
                        </div>
                        <span class="fw-bold">PLANT 2</span>
                    </a>
                </div>
            </div>
            <div class="copyright">
                <img src="{{ asset('assets/img/patria-logo-dark.png') }}" alt="Patria Logo">
                <span>PATRIA &copy; <span>2024</span>. All right reserved.</span>
            </div>
        </div>
    </div>

    <div class="container content-home">
        <div>
            <h2 class="text-center text-white">Welcome to <b>PATRIA QMS<b></h2>
            <h5 class="text-white">{{ Auth::user()->name }}!</h5>
        </div>
    </div>

    @include('layouts.script-area')
    @yield('myscript')
</body>

</html>

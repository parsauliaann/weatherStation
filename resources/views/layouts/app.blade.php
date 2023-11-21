<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('img/gundar.png')}}">
        <title>Dashboard Weather Station S475</title>

        <!-- Fonts and icons -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

        <!-- Nucleo Icons -->
        <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/b7f80dc676.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />

        <!-- CSS Files -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link id="pagestyle" href="{{asset('css/argon-dashboard.css')}}" rel="stylesheet" />
        @livewireStyles
        @yield('css')
    </head>
    <body class="g-sidenav-show bg-gray-100" style="min-height: 100vh; background-image: linear-gradient(to top, #209cff 0%, #68e0cf 100%);">
        <div class="pt-4 mx-4 d-flex justify-content-between align-items-center">
            <img src="{{asset('img/ugtechnopark.png')}}" style="height:120px; object-fit: contain">
            <div>
                <h1 class="text-white">S475 Weather Station UG Techno Park</h1> 
                <h6 class="text-white">Unnamed Road, 66Q5+5WX, Jamali, Kec. Mande, Kabupaten Cianjur, Jawa Barat 43292, Indonesia UG Techno Park</h6>
            </div>
        </div>

        <aside class="sidenav">
            <div class="navbar-collapse">
                <div class="fixed-plugin">
                    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                        <i class="fa-solid fa-bars" style="color: #1a9957;"></i>
                    </a>
                    <div class="card shadow-sm">
                        <div class="card-header sidenav-header">
                            <h4 class="">S475 Weather Station <br/> UG Techno Park</h4>
                        </div>
                        <div class="card-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('dashboard') }}">
                                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Dashboard</span>
                                    </a>
                                </li>
                                @if(auth()->user()->status == 'dosen')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admins') }}">
                                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Admin</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('dataanalysis') }}">
                                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-chart-bar-32 text-warning text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Data Analysis</span>
                                    </a>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
    
                                        <button class="btn shadow-none nav-link">
                                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="ni ni-user-run text-warning text-sm opacity-10"></i>
                                            </div>
                                            <span class="nav-link-text ms-1">Log Out</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    
        <main class="main-content position-relative border-radius-lg main">
            @yield('content')
        </main>

        <!--   Core JS Files   -->
        <script src="{{asset('js/core/popper.min.js')}}"></script>
        <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>
        <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
        <script src="{{asset('js/argon-dashboard.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script>
            if (document.querySelector(".fixed-plugin")) {
                var fixedPlugin = document.querySelector(".fixed-plugin");
                var fixedPluginButton = document.querySelector(".fixed-plugin-button");
                var fixedPluginButtonNav = document.querySelector(
                    ".fixed-plugin-button-nav"
                );
                var fixedPluginCard = document.querySelector(".fixed-plugin .card");
                var fixedPluginCloseButton = document.querySelectorAll(
                    ".fixed-plugin-close-button"
                );
                var navbar = document.getElementById("navbarBlur");
                var buttonNavbarFixed = document.getElementById("navbarFixed");

                if (fixedPluginButton) {
                    fixedPluginButton.onclick = function () {
                        if (!fixedPlugin.classList.contains("show")) {
                            fixedPlugin.classList.add("show");
                        } else {
                            fixedPlugin.classList.remove("show");
                        }
                    };
                }

                if (fixedPluginButtonNav) {
                    fixedPluginButtonNav.onclick = function () {
                        if (!fixedPlugin.classList.contains("show")) {
                            fixedPlugin.classList.add("show");
                        } else {
                            fixedPlugin.classList.remove("show");
                        }
                    };
                }

                fixedPluginCloseButton.forEach(function (el) {
                    el.onclick = function () {
                        fixedPlugin.classList.remove("show");
                    };
                });

                document.querySelector("body").onclick = function (e) {
                    if (
                        e.target != fixedPluginButton &&
                        e.target != fixedPluginButtonNav &&
                        e.target.closest(".fixed-plugin .card") != fixedPluginCard
                    ) {
                        fixedPlugin.classList.remove("show");
                    }
                };

                if (navbar) {
                    if (navbar.getAttribute("data-scroll") == "true" && buttonNavbarFixed) {
                        buttonNavbarFixed.setAttribute("checked", "true");
                    }
                }
            }
        </script>
        @livewireScripts
        @yield('js')
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.ico') }}">
    <title>Star Team Smartpark System</title>

    <!-- Custom CSS -->
    <link href="{{ asset('libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">

    <!-- Custom CSS for Logo Size -->
    <style>
        .logo-img {
            max-width: 130px;
            height: auto;
        }

        .sidebar-item.active {
            background-color: #4c4c4c;
        }

        .sidebar-title {
            padding: 10px 15px;
            font-size: 14px;
            font-weight: bold;
            color: #ffffff;
            background-color: #333;
        }
        .slot-kosong {
        background-color: #4CAF50; /* Hijau untuk slot kosong */
    }

    .slot-terisi {
        background-color: #FF5733; /* Merah untuk slot terisi */
    }
    </style>
</head>

<body>

    <!-- Main wrapper -->
    <div id="main-wrapper">
        <!-- Topbar header -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- Sidebar toggle (visible on mobile only) -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        <b class="logo-icon p-l-10">
                            <img src="{{ asset('images/logo smartpark.png') }}" alt="homepage" class="light-logo logo-img" />
                        </b>
                    </a>
                    <!-- Mobile toggle -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- Left nav items -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- Right nav items -->
                    <ul class="navbar-nav float-right">
                        <!-- Notifications -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- User profile dropdown -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to logout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-primary">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Logout Modal -->

        <!-- Left Sidebar -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
            <nav class="sidebar-nav">
    <ul id="sidebarnav" class="p-t-30">
        <li class="sidebar-title">Main Navigation</li>
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <li class="sidebar-title">User Management</li>
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('users.index') }}" aria-expanded="false">
                <i class="mdi mdi-account"></i><span class="hide-menu">Data Pengguna</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dataparkir.index') }}" aria-expanded="false">
                <i class="mdi mdi-parking"></i><span class="hide-menu">Data Parkir</span>
            </a>
        </li>
        <li class="sidebar-title">Slot Parkir</li>
        <li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('slotparkir.index') }}" aria-expanded="false">
        <i class="mdi mdi-car-parking"></i><span class="hide-menu">Manajemen Slot Parkir</span>
    </a>
</li>

        <li class="sidebar-title">Vehicle Management</li>
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('kendaraan.index') }}" aria-expanded="false">
                <i class="mdi mdi-car"></i><span class="hide-menu">Data Kendaraan</span>
            </a>
        </li>
        <li class="sidebar-title">Transaction Management</li>
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('transaksis.index') }}" aria-expanded="false">
                <i class="mdi mdi-cash-multiple"></i><span class="hide-menu">Data Transaksi</span>
            </a>
        </li>
        <li class="sidebar-title">History</li>
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('riwayatparkir.index') }}" aria-expanded="false">
                <i class="mdi mdi-history"></i><span class="hide-menu">Riwayat Parkir</span>
            </a>
        </li>
        <!-- New Navigation Item -->
       
    </ul>
</nav>
        </aside>
        <!-- End Left Sidebar -->

        <!-- Page wrapper -->
        <div class="page-wrapper">
            <!-- Breadcrumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">@yield('page-title')</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('page-title')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb and right sidebar toggle -->

            <!-- Main content -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- End Main content -->
        </div>
        <!-- End Page wrapper -->
    </div>
    <!-- End Main wrapper -->

    <!-- JavaScript -->
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    
    <script>
    (function () {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function () {
            window.history.pushState(null, "", window.location.href);
        };
    })();
    
</script>

</body>

</html>

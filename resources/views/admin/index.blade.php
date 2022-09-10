<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords"
            content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
        <meta name="description"
            content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
        <meta name="robots" content="noindex,nofollow" />
        <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets_admin/assets/images/favicon.png') }}" />
        <!-- Custom CSS -->
        <link href="{{ asset('assets_admin/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="{{ asset('assets_admin/dist/css/style.min.css') }}" rel="stylesheet" />
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
            data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon -->
                            <b class="logo-icon ps-2">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{ asset('assets_admin/assets/images/logo-icon.png') }}" alt="homepage"
                                    class="light-logo" width="25" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text ms-2">
                                <!-- dark Logo text -->
                                <img src="{{ asset('assets_admin/assets/images/logo-text.png') }}" alt="homepage"
                                    class="light-logo" />
                            </span>
                        </a>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                                class="ti-menu ti-close"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-start me-auto">
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                    data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                            </li>
                            <!-- ============================================================== -->
                            <!-- create new -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="d-none d-md-block">
                                        Buat Baru <i class="fa fa-angle-down"></i></span>
                                    <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/admin/inputsiswa">Data Siswa</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li><a class="dropdown-item" href="/admin/inputguru">Data Guru</a></li>
                                    {{-- <li><a class="dropdown-item" href="#"></a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"></a>
                                    </li> --}}
                                </ul>
                            </li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            {{-- <li class="nav-item search-box">
                          <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                                  class="mdi mdi-magnify fs-4"></i></a>
                          <form class="app-search position-absolute">
                              <input type="text" class="form-control" placeholder="Search &amp; enter" />
                              <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                          </form>
                      </li> --}}
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-end">
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-bell font-24"></i>
                                </a>

                            </li>
                            <!-- ============================================================== -->
                            <!-- End Comment -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Messages -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="font-24 mdi mdi-comment-processing"></i>
                                </a>
                                {{-- <ul class="
        dropdown-menu dropdown-menu-end
        mailbox
        animated
        bounceInDown
      " aria-labelledby="2">
                          </ul> --}}
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="
        nav-link
        dropdown-toggle
        text-muted
        waves-effect waves-dark
        pro-pic
      " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets_admin/assets/images/users/1.jpg') }}" alt="user"
                                        class="rounded-circle" width="31" />
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                    aria-labelledby="navbarDropdown">
                                    {{-- <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="mdi mdi-email me-1 ms-1"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="mdi mdi-settings me-1 ms-1"></i> Account
                                        Setting</a> --}}
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off me-1 ms-1"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <div class="ps-4 p-10">
                                        <a href="javascript:void(0)"
                                            class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                                    </div>
                                </ul>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="pt-4">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/home"
                                    aria-expanded="false"><i class="mdi mdi-home"></i><span
                                        class="hide-menu">Home</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/siswa"
                                    aria-expanded="false"><i class="mdi mdi-folder-account"></i><span
                                        class="hide-menu">Siswa</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/guru"
                                    aria-expanded="false"><i class="mdi mdi-folder-account"></i><span
                                        class="hide-menu">Guru</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/matapelajaran"
                                    aria-expanded="false"><i class="mdi mdi-book"></i><span
                                        class="hide-menu">Mata Pelajaran</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/jadwal"
                                    aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span
                                        class="hide-menu">Jadwal</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/nilai"
                                    aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                        class="hide-menu">Nilai</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/uas"
                                    aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                        class="hide-menu">UAS</span></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                {{-- <div class="page-breadcrumb">
              <div class="row">
                  <div class="col-12 d-flex no-block align-items-center">
                      <h4 class="page-title">Dashboard</h4>
                      <div class="ms-auto text-end">
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">
                                      Library
                                  </li>
                              </ol>
                          </nav>
                      </div>
                  </div>
              </div>
          </div> --}}
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    {{-- start content --}}
                    @if (session('pesan'))
                        <div class="alert alert-success">
                            <strong>{{ session('pesan') }}</strong>
                        </div>
                    @endif
                    @yield('content')
                    {{-- end content --}}
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                {{-- <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by
        <a href="https://www.wrappixel.com">WrapPixel</a>.
    </footer> --}}
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset('assets_admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('assets_admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}">
        </script>
        <script src="{{ asset('assets_admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('assets_admin/dist/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('assets_admin/dist/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('assets_admin/dist/js/custom.min.js') }}"></script>
        <!--This page JavaScript -->
        <script src="{{ asset('assets_admin/dist/js/pages/dashboards/dashboard1.js') }}"></script>
        {{-- datatable js --}}
        <script src="{{ asset('assets_admin/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
        <!-- Charts js Files -->
        <script src="{{ asset('assets_admin/assets/libs/flot/excanvas.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/libs/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/libs/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/libs/flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/libs/flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
        <script src="{{ asset('assets_admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('assets_admin/dist/js/pages/chart/chart-page-init.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        <script>
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            const pesan = document.querySelector('div#pesan');
            if (pesan) {
                Toast.fire({
                    icon: 'success',
                    title: 'Berhasil'
                });
            }
        </script>
    </body>

</html>

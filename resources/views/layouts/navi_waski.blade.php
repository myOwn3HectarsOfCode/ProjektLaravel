<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        
        <script src="{{ asset('vendor/chart.js/klikniecie6.js') }}" defer></script>
        <!-- Custom styles for this template-->
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/fontawesome-free/css/fontawesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet"> 
        <title>Generator raportów - Centrum</title>
    </head>
    <body id="page-top" class="aidebar-toggled">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled"  id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon ">
                        <i class="fas lewy fa-angle-up fa-leaf"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Generator raportów <sup></sup></div>
                </a>
                <li class="nav-item dropdown  no-arrow">
                    @if (!session('status'))
                    {{ session('status') }}
                    @endif
                    <a class="nav-link  dropdown-toggle" href="#" id="userDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      
                       </br>
                       @if(isset(Auth::user()->name))
                       {{ Auth::user()->name }}
                     @else
                      {{ Auth::route('wyjatek') }}
                      @endif
                        <span class="mr-2 d-none d-lg-inline text-white-600 small">                              
                        </span> <br>
                        <img class="img-profile rounded-circle"
                             src="{{ asset('img/undraw_profile.svg') }}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow "
                         aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Wyloguj
                        </a>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <i class="fas fa-hand-point-right"></i>
                        <span>Pulpit</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Interfejs - Panel zapytań
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                       aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas  fa-address-book"></i>
                        <span>Dodaj plik</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Formaty plików</h6>


                            <a class="nav-link2 dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-file-csv fa-sm fa-fw mr-2 text-black-400"></i>
                                csv
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu bg-gradient-success text-white-400  shadow" id="jeden"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" id="dwa" role="button"  href="{{ route('csv') }}">
                                <i class="fas fa-table fa-sm fa-fw mr-2 text-black-400"></i>
                                    NAZWY KOLUMN to pierwszy wiersz
                                </a>
                                <div class="dropdown-menu dropdown-toggle bg-gradient-success text-white-400  shadow" id="jeden"
                                 aria-labelledby="userDropdown">cośtam</div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModa"> 
                                <i class="fas fa-columns fa-sm fa-fw mr-2 text-black-400"></i> 
                                    BRAK nazw kolumn
                                </a>
                            </div>


                            <a class="nav-link2 dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-file-alt fa-sm fa-fw mr-2 text-black-400"></i> 
                                odt
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu shadow" id="jeden"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    
                                NAZWY KOLUMN to pierwszy wiersz
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModa"> 
                                    <i class="fas fa-columns w mr-2 text-black-400"></i>
                                    BRAK nazw kolumn
                                </a>
                            </div>
                            <a class="nav-link2 dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-file-excel fa-sm fa-fw mr-2 text-black-400"></i>
                                xlsx
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu shadow" id="jeden"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                NAZWY KOLUMN to pierwszy wiersz
                                    
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModa"> 
                                    
                                BRAK nazw kolumn
                                </a>
                            </div>
                        </div>

                    </div>

                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                       aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-columns"></i>
                        <span>Narzędzia</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                         data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item" href="utilities-color.html">Colors</a>
                            <a class="collapse-item" href="utilities-border.html">Borders</a>
                            <a class="collapse-item" href="utilities-animation.html">Animations</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                </li>
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tabele') }}">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Wyszukaj..."
                                       aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                     aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                   placeholder="Search for..." aria-label="Search"
                                                   aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                @if (!session('status'))
                                {{ session('status') }} 
                                @endif
                                <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-800 ">
                                    @if(isset(Auth::user()->name))  
                       {{ Auth::user()->name }}
                     @else(Auth::route('wyjatek'))
                     @endif
                                    </span>
                                    <img class="img-profile rounded-circle"
                                         src="{{ asset('img/undraw_profile.svg') }}">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profil
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> 
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Wyloguj
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->
                    <!-- Footer -->
                    <div class="content">
                        @yield('content1')
                    </div>
                    <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Your Website 2021</span></br> </br>startbootstrap-sb-admin-2-gh-pages</br>customized by ola </br>Licencja: <a href="https://github.com/startbootstrap/startbootstrap-sb-admin-2/blob/master/LICENSE">MIT:</a></span>
                                </div>
                            </div>
                        </footer> 
                    <!-- End of Footer -->
                </div>
                
            </div>
          
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content ">
                        <div class="card-body p-0">
                            <!-- Outer Row -->
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12 col-md-9">
                                    <div class="card o-hidden border-0 shadow-lg my-5">
                                        <div class="card-body p-0">
                                            <!-- Nested Row within Card Body -->
                                            <div class="row">
                                                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                                                <div class="col-lg-7">
                                                    <div class="p-5">
                                                        <div class="text-center">
                                                            <h1 class="h4 text-gray-900 mb-4">Wylogować Cię?</br></h1>
                                                        </div>
                                                        <form class ="user" method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                            </div>
                                                            <div class="form-group">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                                    Wyloguj
                                                                </button>
                                                            </div>
                                                        </form>
                                                        <form class=user>
                                                            <div class="btn-tzreci">
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                          
                                        </div>
                                        
                                    </div>
                                    <!-- Bootstrap core JavaScript-->
                                    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
                                    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                                    <!-- Core plugin JavaScript-->
                                    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
                                    <!-- Custom scripts for all pages-->
                                    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
                                    <!-- Page level plugins -->
                                    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
                                    <!-- Page level custom scripts -->
                                   
                                    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
 



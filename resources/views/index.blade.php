<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Generator raportów - Centrum</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon ">
                    
                    <i class="fas lewy fa-angle-up fa-leaf"></i>
                   
                   
                </div>
                <div class="sidebar-brand-text mx-3">Generator raportów<sup></sup></div>
            </a>
            <li class="nav-item dropdown  no-arrow">
                <a class="nav-link  dropdown-toggle" href="#" id="userDropdown" role="button"
                    
                    data-toggle="modal" data-target="#logoutModal">
                    <span class="mr-2 d-none d-lg-inline text-white-600 small">
                    <img class="img-profile rounded-circle"
                        src="img/g835.png">
                        <hr>
                       LOGOWANIE</span>
                </a>
                <!-- Dropdown - User Information -->
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <p class="nav-link" >
                    <i class="fas fa-hand-point-right"></i>
                    <span>Pulpit</span></p>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfejs-Panel zapytań
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pomoc do logowania</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pomoc do logowania</h6>
                        <a class="collapse-item"  href="{{ route('register') }}">Rejestracja</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <p class="szary nav-link collapsed"  data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-columns"></i>
                    <span>Narzędzia</span>
</p>
               <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Powiązane
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <p class="szary collapsed"  data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Strony</span>
</p>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <p class="szary" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Wykresy</span></p>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <p class="szary" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabele</span></p>
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
                    
                        
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="modal" data-target="#logoutModal">
                            <!--<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                  data-toggle="modal" data-target="#logoutModal>-->
                                <span class="mr-2 d-none d-lg-inline text-black-50">LOGOWANIE</span>
                                <img class="img-profile rounded-circle"
                                    src="img/g835.png">
                            </a>
                        </li>
                    </ul>
               
                </nav>
                <!-- End of Topbar --><div>
                   
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h4 mb-0 text-gray-800">Aby korzystać z Generatora raportów </br>musisz się <a href="#" data-toggle="modal" data-target="#logoutModal">zalogować.<a></br>
                    Jeśli tu wracasz oznacza to, że musisz się <a class="czerwony" href="{{ route('register') }}">zarejestrować.</a></h3>
                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">
</div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                      
                                <!-- Card Header - Dropdown -->
                               

                        <!-- Pie Chart -->
                       
                                <!-- Card Body -->
</div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                 
                                </div>
                                <div class="card-body">
                                   
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  
                                    <div class="progress mb-4">
                                       
                                   
                                    <div class="progress">
                                      
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                
                                <div class="col-lg-6 mb-4">
                                  
                                </div>
                                <div class="col-lg-6 mb-4">
                                   
                                </div>
                                <div class="col-lg-6 mb-4">
                                   
                                </div>
                                <div class="col-lg-6 mb-4">
                                   
                                </div>
                                <div class="col-lg-6 mb-4">
                                    
                                </div>
                                <div class="col-lg-6 mb-4">
                                  
                                </div>
                                <div class="col-lg-6 mb-4">
                                   
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                           
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                             
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span></br> </br>startbootstrap-sb-admin-2-gh-pages</br>customized by ola </br>Licencja: <a href="https://github.com/startbootstrap/startbootstrap-sb-admin-2/blob/master/LICENSE">MIT:</a></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
       
        <div class="modal-dialog" role="document">
            <div class="modal-content "></form>
              
             
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
                                <div class="pad">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Witaj!</br></h1>
                                    </div>
                                    <form class ="user" method="POST" action="{{ route('login') }}">
                                       @csrf
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control form-control-user  @error('email') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="login"  autofocus>
                                                
                                                </input>
                                        @error('name')
                                  <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        </div>
                                        <div class="form-group">
                                           
                                                <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="hasło">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </input>
                                        </div>
                                        <div class="form-group user">
                                        <button type="submit" class="btn btn-primary form-control-user btn-user btn-block">
                                            Zaloguj
</button>
                                        </div>
</form>
                                        <form class=user>
                                        <div class="btn-trzeci">
                                        <a href="{{ route('register') }}" class="btn btn-info  btn-user btn-block">
                                            Zarejestruj 
                                        </a>
                                        </div>
                                      </form>
                                        <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
       <!-- </div>-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
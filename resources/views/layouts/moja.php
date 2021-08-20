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
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                    <img class="img-profile rounded-circle"
                        src="img/g835.png">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow "
                    aria-labelledby="userDropdown">

                    <a class=" dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                       Zaloguj się
                    </a>
                 
               

                    <a class=" dropdown-item" href="forgot-password.html">
                    <i class="fab fa-battle-net fa-sm fa-fw mr-2 text-gray-400"></i>
                      Zresetuj hasło
                    </a>
</div>
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
                        
                        <a class="collapse-item" href="forgot-password.html">Jeśli zapomnisz hasła</a>
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
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
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tu się zalogujesz</span>
                                <img class="img-profile rounded-circle"
                                    src="img/g835.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=" dropdown-menu shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                            
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Zaloguj się
                                </a>
                            </div>
                        </li>
                 
                        


                    </ul>
               
                </nav>
                <!-- End of Topbar --><div>
                   
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Aby korzystać z Generatora raportów </br>musisz się zalogować</h1>
                       
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
                        <span>Copyright &copy; Your Website 2021</span></br> </br>Szablon Bootstrap </br>Licencja: <a href="https://github.com/startbootstrap/startbootstrap-sb-admin-2/blob/master/LICENSE">MIT:</a></span>
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
<form method="POST"> <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header klass">
                    <h5 class="modal-title" id="exampleModalLabel">PANEL LOGOWANIA</h5>
                   </div>
                   <table>
                    <tr><td>
                    <div class=" klassawewn">
                        
                  <div class="klassazewn"><label><h5 class="modal-title" id="exampleModalLabel">nazwa użytkownika:</h5></label></div>
                  
                    
                        </td>
             <td>
                  <div class="klassazewn"><input type="text"></input></div></td></tr>
                </div>
                <tr>
                  <div class=" klassawewn">
                    <td>
                  <div class="klassazewn"><label><h5 class="modal-title" id="exampleModalLabel">hasło:</h5></label></div>
                    </td>
                    <td>
                  <div class="klassazewn"><input type="password"></input></div></div>
                </td>
                </tr>
            </table>
                   <div class="modal-body">Aby rozpocząć sesję kliknij "Zaloguj"</div>
                   <div class="modal-footer">
                       <button class="btn btn-secondary" type="button" data-dismiss="modal">Przypomnienie hasła</button>
                       <a class="btn btn-primary" href="zalogowany">Zaloguj</a>
                       <a  class="btn btn-primary" href="register.html">Zarejestruj sie</a>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   
                
                
                
            </div>
        </div>
    </form>
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
@extends('layouts.navi_szeroki')

@section('content2')
<div class="container-fluid">

    <!-- Content Row -->
    <h5>Korzystanie z GENERATORA RAPORTÓW</h5>
    <div class="row">

        @if(isset(Auth::user()->name))                           

        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->






            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    Spróbuj dodać plik<br>korzystając  z bocznego paska nawigacyjnego</br>
                    <img src="{{ asset('vendor/fontawesome-free/svgs/solid/smile-wink.svg') }}"/>                                   
                </div>

            </div>

            <img src="{{ asset('vendor/fontawesome-free/svgs/solid/arrow-left.svg') }}"/>




        </div>
        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">

                </div>
                <div class="card-body">

                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-4">
                        <div class="progress-bar " role="progressbar" style="width: 40%"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
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
        @else
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h5 class=" mb-0 text-gray-800">Aby korzystać z Generatora raportów </br>musisz się
                    <a href="{{ route('login') }}">zalogować.</a></br><br>
                    Jeśli tu wracasz to być może podałeś złe dane logowania.</br>Możesz się tutaj <a class="czerwony" href="{{ route('register') }}">zarejestrować.</a></h4>

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

        </div>
        <!-- /.container-fluid -->

        @endif
        @endsection
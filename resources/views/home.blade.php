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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h2> {{ __('Zostałeś uwierzytelniony.') }}</br> {{ ('Jesteś już zalogowany, ') }}</br>
                   <b>{{ Auth::user()->name }}</b></h2></br>
                    <div class="row justify-content-left">
                    <form name ='logout-form' method ='POST' action="{{ route('logout') }}" >
                     @csrf
                  
                     <a class="center " href="{{ route('wdomu') }}">Przejdź do aplikacji</a>
                  <button class="center btn-secondary" type="submit" data-dismiss="modal">Wyloguj się</button>
                 
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
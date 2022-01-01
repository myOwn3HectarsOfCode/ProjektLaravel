@extends('layouts.navi_szeroki')

@section('content1')

                            <!-- Outer Row -->
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12 col-md-9">
                                    <div class="card1 o-hidden border-0 shadow-lg my-5">
                                        <div class="card-body p-0">
                                            <!-- Nested Row within Card Body -->
                                            <div class="row">
                                            <div class="col-lg-2">
                                            </div>
                                                <div class="col-lg-7">
                                                    <div class="p-6">
                                                        <div class="text-left">
                                                            <span class="h2 text-gray-900 mb-4">Dodaj plik .csv</span>
                                                            <p class="body text-gray-900 mb-4"> (kodowanie utf-8}</p>
                                                        </div>
                                                       <form class ="user" enctype=”multipart/form-data” method="POST" action="{{ route('podejrzyj') }}">
                                                            @csrf
                                                            
                                                            <div class="form-group upload">
                                                                <div class="btn">
                                                            <input id="csv" type="file" name="csv" class="form-control form-control-user upload"></input> 
                                                            Kliknij pole aby wybrać plik</div>   
                                                            <input type="hidden" name="MAX_FILE_SIZE" value="512000"></input>
                                                                </div>
                                                            <div class="form-group">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                                    Załaduj na stronę
                                                                </button>
                                                            </div>
                                                            <div class="p-6">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

   <!--         <div class="modal-content ">       
<div class="card-body p-0">
       
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card1  border-0 shadow-lg my-5">
                    <div class="card-body p-0">
<form class="" name="wybierz" method="GET" action="{{ route('podejrzyj') }}">
@csrf

<input id='csv' type="file" class="btn-user"></input>
<button type="submit" class="btn-google">Podejrzyj CSV</button>
</div>
</div>
</div>-->
</div>
</div>
@endsection
@extends('layouts.navi_waski')

@section('content1')
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
<div class="card-body">
    <!--<p class="czarny">Nazwy
    <form class="user">
     @csrf 
   
    @foreach (App\Http\Controllers\CsvController::$naglowki_tab as $naz_kolumny)
     <input id="{{ $naz_kolumny }}" type="button" class="btn-info btn form-group user" value="{{ $naz_kolumny }}"></input>
         @endforeach
         </form>  
         </p> --> 

</div>
</div>
</div>
</div>
<div class="container-fluid  ">
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
<div class="card-body">
<b class="czarny">PODGLĄD TABELI (kliknij wybrane tytuły kolumn w celu importu)</b>

<button class="text-white-600 small user2 btn-google" type="submit" onclick="b()">Import do bazy
</button>

        <div class="table-responsive  Container Flipped">
            <div class="Flipped Content">
 
            <table class="table czarny " id="dataTable" width="100%" cellspacing="0">
                <tbody>
   <tr class="table solid btn-info">
 @foreach (App\Http\Controllers\CsvController::$naglowki_tab as $naz_kolumny)
   <td class="table solid btn-info"><b><input type="button" id="{{ App\Http\Controllers\CsvController::$id_nagl.='n' }}" onclick="b()" class="" value="{{ $naz_kolumny }}"></input></b></td>
@endforeach
</tr>

      @foreach (App\Http\Controllers\CsvController::$zaw_bez_nag  as $cos)
      <tr class=" solid table">
      	@foreach ($cos as $strink)
          <td class="solid table">
	{{ $strink }}
         </td>
	@endforeach
    
      @endforeach
     
</tr>
</tbody>
</table>

</div>

</div>
</div>
</div>
</div>
</div>

@endsection

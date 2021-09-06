@extends('navi')

@section('content1')
<table class="solid">
   
<span> @foreach (App\Http\Controllers\CsvController::$linia as $naz_kolumny)

    <th><td class="solid">{{ $naz_kolumny }}</td></th>
</span>
@endforeach

</table>
 @foreach (App\Http\Controllers\CsvController::$zawartosc as $string)   
 <pre>
     
 {{ $string }}
</pre>
 @endforeach

    <button class="user btn btn-google" type="submit">Import do bazy
</button>


@endsection

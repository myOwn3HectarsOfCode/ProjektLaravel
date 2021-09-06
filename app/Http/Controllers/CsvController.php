<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DostawcaCsvRequest;
//use App\Providers\CsvImportProvider;
use App\Http\Controllers\Controller;

class CsvController extends Controller
{
    public function __construct()
    {
        //$request = new DostawcaCsvRequest();
    }
    public static $count;
    public static $zawartosc = [];
    public static $linia = [];
    public static $naglowki_tab = [];

    //function return content of file in array with numeric keys form,
    //in whitch one row from csvfile is one place in static field of class CsvController named  self::$zawartosc
    public static function pobranie(Request $request)
    {
        $zawartosc =[];
        $count=0;
        $b=config('app.name', 'Laravel');
        $c=getcwd();
        $plik = fopen($c.'\Geograficzne stolice.csv', 'r');
        while (!feof($plik)) {
            $linia = fgets($plik);
            $zawartosc [$count]= $linia;
            $count ++;
        }
        //  $ile=$count($zawartosc [$count];
        self::$zawartosc = $zawartosc;
        self::$count = $count;
        $linia2= $zawartosc[0];
        $tablica =[];
        $tablica =explode(',', $linia2);
        self::$linia = $tablica;
        return view('csv_naz_kol');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\FileHelpers;
use Illuminate\Http\File;

use App\Http\Requests\DostawcaCsvRequest;
//use App\Providers\CsvImportProvider;
use App\Http\Controllers\Controller;

class CsvController extends Controller
{
    public function __construct()
    {
    }
    //FIELDS (static):
    public static $count;//counter for lines in csv file
    public static $count2;//size of table $komorki (table from every one line- line is divided by ":" into columns  )
    public static $tab_zliczen = [];//values (int) of sizes every tables $komorki
    public static $zawartosc = [];//table: whole filecontent line by line
    public static $komorki = [];// one string from line(from $line) divided into content of columns
    public static $komorki_kolejne = [];//double table: key: "$count" => value: $komorki
    public static $naglowki_tab = [];//first line (string) of table (headers)
    public static $linia; //string from fileline got from file
    public static $zaw_bez_nag = [];// double table $komorki_kolejne without headers( name of colummns)
    public static $id_nagl='';//helps by looking for getElementsById in html

    
    public static function pobranie(Request $request)
    {
        $zawartosc =[];
        $count=0;
        $komorki = [];
        //main directory of user:
        $c=getcwd();
        $d=$request->input('csv');
        $file=new UploadedFile($d, '');
        $plik = fopen($c.'\\'.$d, 'r');
           
        while (!feof($plik)) {
            $linia = fgets($plik);
            $zawartosc [$count] = $linia;
            $komorki = explode(';', $linia);
            $count2 = count($komorki);
            $tab_zliczen[$count] = $count2;
            $komorki_kolejne [$count] = $komorki;
           
            self::$komorki_kolejne  = $komorki_kolejne;
            self::$komorki = $komorki;
            self::$count2 = $count2;
            self::$tab_zliczen = $tab_zliczen;
           
            $count ++;
        }
       
        self::$count = $count;
        $naglowki_tab = $zawartosc[0];
        $tablica =[];
        $tablica =explode(';', $naglowki_tab);
        self::$naglowki_tab = $tablica;
        
        self::$zawartosc = $zawartosc;
        self::$zaw_bez_nag = array_slice(self::$komorki_kolejne, 1);
        return view('csv_naz_kol');
    }
}

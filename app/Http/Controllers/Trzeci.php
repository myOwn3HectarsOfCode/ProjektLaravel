<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Trzeci extends Controller
{
    //
    public function zaloguj(){
        return view ('logowanie');
    }
    public function navi(){
        return view ('layouts.navi');
    }

}

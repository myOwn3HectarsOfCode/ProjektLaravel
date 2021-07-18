<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pierwszy extends Controller
{
    //
    public function moja(){
        return view ('welcome');
    }
}

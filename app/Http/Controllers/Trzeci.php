<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Trzeci extends Controller
{
    //
    public function zaloguj()
    {
        return view('logowanie');
    }

    public function navi()
    {
        return view('navi');
    }

    public function rej()
    {
        return view('auth.register');
    }

    public function csv()
    {
        return view('plik_csv_head');
    }

    public function import_csv()
    {
        return view('parse_csv');
    }
}

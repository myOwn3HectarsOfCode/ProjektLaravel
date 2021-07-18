<?php

use Illuminate\Support\Facades\Route;
//dopisane przeze mnie 
use App\Http\Controllers\Pierwszy;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Route::get('/zalogowany', function () {
    //return view('zalogowany');
//});

//Route::get('/niezalogowany', function () {
    //return view('index');
//});
Route::get('/welcome', [Pierwszy::class, 'moja']);
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

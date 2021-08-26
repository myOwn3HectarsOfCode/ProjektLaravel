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


Route::get('/', 'App\Http\Controllers\Pierwszy@moja')->name('tu');



 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aplikacja', 'App\Http\Controllers\Drugi@zalogowany')->name('wdomu');
Route::get('/zaloguj', 'App\Http\Controllers\Trzeci@zaloguj')->name('zaloguj');
//Route::get('/index#', 'App\Http\Controllers\Pierwszy@moja')->name('skok');
Route::get('/navi', 'App\Http\Controllers\Trzeci@navi');
Route::get('/aplikacja/tabele', 'App\Http\Controllers\Czwarty@tabele')->name('tabele');
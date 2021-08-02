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


Route::get('/', 'App\Http\Controllers\Pierwszy@moja');
Route::get('/zalogowany', 'App\Http\Controllers\Drugi@zalogowany'); 
Route::get('/niezalogowany', 'App\Http\Controllers\Trzeci@wyloguj');

 

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

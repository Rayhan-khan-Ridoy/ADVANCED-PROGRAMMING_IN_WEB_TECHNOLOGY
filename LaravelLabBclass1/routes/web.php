<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/cv', function () {
    return view('cv');
});
Route::get('/pe', function () {
    return view('pe');
});
Route::get('/ic', function () {
    return view('ic');
});
Route::get('/ts', function () {
    return view('ts');
});



?>

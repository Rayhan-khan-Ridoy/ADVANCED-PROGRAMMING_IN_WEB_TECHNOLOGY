<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\StudentController;

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

Route::get('/cv',[pagesController::class,'cv']  );
Route::get('/pe', [pagesController::class,'pe'] );
Route::get('/ic', [pagesController::class,'ic'] );
Route::get('/ts', [pagesController::class,'ts'] );

/*
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
*/

//Route::get('/create',[StudentController::class,'create']);
Route::get('/create/create',[StudentController::class,'create'])->name('create');
Route::get('/list',[StudentController::class,'list']);
Route::get('/get',[StudentController::class,'get']);
Route::get('/profile',[StudentController::class,'myprofile']);
Route::get('/education',[StudentController::class,'education']);

Route::get('/details/{id}/{name}',[StudentController::class,'details']);

Route::get('/regis',[StudentController::class,'registration'])->name('registration');
Route::post('/AfterRegis',[StudentController::class,'AfterRegis'])->name('AfterRegis');


?>

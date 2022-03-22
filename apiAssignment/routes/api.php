<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\deptController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/viewAllStudents',[studentController::class,'viewAllStudents'])->name('viewAllStudents');
Route::post('/addStudent',[studentController::class,'addStudent'])->name('addStudent');
Route::put('/editStudent/{id}',[studentController::class,'editStudent'])->name('editStudent');
Route::delete('/deletetStudent/{id}',[studentController::class,'deletetStudent'])->name('deletetStudent');

Route::get('/viewAlldepts',[deptController::class,'viewAlldepts'])->name('viewAlldepts');
Route::post('/addDept',[deptController::class,'addDept'])->name('addDept');
Route::put('/editDept/{id}',[deptController::class,'editDept'])->name('editDept');
Route::delete('/deleteDept/{id}',[deptController::class,'deleteDept'])->name('deleteDept');

Route::get('/dept/St/Details/{id}',[deptController::class,'deptStudentDetails'])->name('deptStudentDetails');

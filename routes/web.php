<?php

use App\Http\Controllers\eskulController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherControlelr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/student',[studentController::class, 'index']);
Route::get('/student-detail/{id}',[studentController::class, 'detail']);
Route::get('/kelas', [kelasController::class, 'kelas']);
Route::get('/kelas-detail/{id}',[kelasController::class, 'detail']);

Route::get('/eskul',[eskulController::class, 'eskul']);

Route::get('/teacher',[teacherControlelr::class, 'guru']);
Route::get('/teacher-detail/{id}',[teacherControlelr::class, 'detail']);
// Route::get('/teacher-detail/{id}',[teacherControlelr::class, 'index']);
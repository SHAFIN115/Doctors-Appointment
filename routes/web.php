<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Route::get('/post',[DoctorController::class,'create'])->name('doctor_create');

Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors_index');
//
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors_create');

Route::get('/doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctors_edit');
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::put('/doctors/{id}', [DoctorController::class, 'update'])->name('doctors.update');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/doctors/{id}/delete', [DoctorController::class, 'delete'])->name('doctors_delete');
Route::delete('/doctors/{id}', [DoctorController::class, 'destroy'])->name('doctors_destroy');
Route::get('/search', [HomeController::class, 'search'])->name('appointments.search');
Route::get('/appointment', [AppointmentsController::class, 'show'])->name('appointments');
Route::get('/create-doctor', function () {
    return view('create');
});


Route::get('doctors_edit', function () {
    return view('edit');
});





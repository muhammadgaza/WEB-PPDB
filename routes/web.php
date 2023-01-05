<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

//home
Route::get('/home', function () {
    return view('home');
});


//registrasi
Route::get('/registrasi', function () {
    return view('registrasi.registrasi');
})->name('registrasi');


Route::get('/registrasi-view', function () {
    return view('registrasi.view');
});

Route::get('/view', function () {
    return view('registrasi.view');
});



//login
Route::get('/login', function () {
    return view('login');
});


//student-dahsboard
Route::get('/student-dashboard', function () {
    return view('layout.master');
})->name('student-dashboard')->middleware(['student']);


//admin-dashboard
Route::get('/admin-dashboard', function () {
    return view('admin.admin');
})->name('admin-dashboard')->middleware(['admin']);




Route::get('/dashboard-siswa', function () {
    return view('student.student');
});


Route::post('/registrasi',[StudentController::class, 'student'])->name('registrasi');
Route::post('/loginAuth',[StudentController::class, 'auth'])->name('loginAuth');
Route::get('/logout', [StudentController::class, 'logout'])->name('logout');





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use RealRashid\SweetAlert\Facades\Alert;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/student', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



require __DIR__.'/auth.php';

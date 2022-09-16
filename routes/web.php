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

Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::get('student', [StudentController::class, 'store'])->name('student.store');


require __DIR__.'/auth.php';

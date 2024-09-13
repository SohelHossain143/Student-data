<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\StudentController;


Route::get('/studentadd', [StudentController::class, 'viewstudentadd']);

//route::post('/store-student', [StudentController::class,'storestudent'])->name('student-store');

Route::post('/store-studet', [StudentController::class, 'storestudent'])->name('student-store');



<?php


use App\Http\Controllers\Crud\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');

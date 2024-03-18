<?php


use App\Http\Controllers\Crud\StudentController;
use App\Http\Controllers\Crud\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('layout.master');
});
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/list',[StudentController::class,'list_student'])->name('student.list');

#subjects
Route::get('/add-subject',[SubjectController::class,'addSubject'])->name('subject.add');

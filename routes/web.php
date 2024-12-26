<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::view('/','welcome');
Route::get('/home',[StudentController::class,'getStudents']);

Route::post('add',[StudentController::class,'addStudent']);
Route::delete('delete/{studentId}',[StudentController::class,'deleteStudent'])->name('student.delete');
Route::get('edit/{studentId}',[StudentController::class,'editStudent'])->name('student.edit');
Route::put('/update/{studentId}', [StudentController::class, 'updateStudent'])->name('student.update');




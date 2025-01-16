<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::prefix('student')->group(function(){
    Route::get('list', [StudentController::class, 'allStudents']);
    Route::view('add', 'add');
    Route::post('add', [StudentController::class, 'add']);
    Route::get('delete/{id}', [StudentController::class, 'delete']);
    Route::get('edit/{id}', [StudentController::class, 'edit']);
    Route::put('edit-student/{id}', [StudentController::class, 'editStudent']);
    Route::get('search', [StudentController::class, 'search']);
    Route::post('delete-multiple', [StudentController::class, 'deleteStudents']);
});


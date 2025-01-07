<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/user/{name}', [UserController::class, 'getUserName']);
Route::get('/user-view/{name}', [UserController::class, 'getUserNameWithView']);
Route::get('/admin/login', [UserController::class, 'getAdminLogin']);

Route::controller(StudentController::class)->group(function () {
    Route::get('show', 'show');
    Route::get('add', 'add');
    Route::get('edit/{id}', 'edit');
    Route::get('delete/{id}', 'delete');
});

Route::prefix('teacher')->group(function(){
    Route::get('show', [TeacherController::class, 'show']);
    Route::get('add', [TeacherController::class, 'add']);
    Route::get('edit/{id}', [TeacherController::class, 'edit']);
    Route::get('delete/{id}', [TeacherController::class, 'delete']);
});

Route::middleware('age-country')->group(function () {
    Route::view('contact', 'contact');
});


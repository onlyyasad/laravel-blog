<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::view('login', "login");
Route::view('profile', "profile");
Route::view('upload', 'upload');

Route::post('upload', [UploadController::class, 'upload']);
Route::get('user', [UserController::class, 'getUser']);
Route::post('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);

Route::prefix('teacher')->group(function(){
    Route::get('show', [TeacherController::class, 'show']);
    Route::get('add', [TeacherController::class, 'add']);
    Route::get('edit', [TeacherController::class, 'edit']);
    Route::get('delete/{id}', [TeacherController::class, 'delete']);
});

Route::prefix('student')->group(function(){
    Route::get('list', [StudentController::class, 'allStudents']);
    Route::view('add', 'add');
    Route::post('add', [StudentController::class, 'add']);
    Route::get('delete/{id}', [StudentController::class, 'delete']);
});
Route::middleware('age-country')->group(function () {
    Route::view('contact', 'contact');
});


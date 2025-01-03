<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::get('user', [UserController::class, 'getUser']);
Route::get('user/{name}', [UserController::class, 'getUserName']);
Route::get('user-view/{name}', [UserController::class, 'getUserNameWithView']);
Route::get('admin/login', [UserController::class, 'getAdminLogin']);


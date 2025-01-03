<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        return "Hafij Al Asad";
    }

    function getUserName($name){
        return "Hello $name!";
    }

    function getUserNameWithView($name){
        return view('getuser', ['name' => $name]);
    }
    function getAdminLogin(){
        // if(View::exists('admin.login')){
        //     return view('admin.login');
        // }else{
        //     echo "No view found!";
        // }

        if(View::exists('admin.signup')){
            return view('admin.signup');
        }else{
            echo "No view found!";
        }
    }
}

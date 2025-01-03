<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "Hafij Al Asad";
    }

    function getUserName($name){
        return "Hello $name!";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function show(){
        return "All Teachers.";
    }
    function add(){
        return "Add teacher.";
    }
    function edit($id){
        return "Edit teacher with id: $id";
    }
    function delete($id){
        return "Delete teacher with id: $id";
    }
}

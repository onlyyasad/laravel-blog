<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show(){
        $students = \App\Models\Student::all();
        
        return view('students', ['students' => $students]);
    }

    function allStudents(){
        $students = \App\Models\Student::all();
        
        return view('students', ['students' => $students]);
    }
    function add(){
        return "Add student.";
    }
    function edit($id){
        return "Edit student with id: $id";
    }
    function delete($id){
        return "Delete student with id: $id";
    }
}

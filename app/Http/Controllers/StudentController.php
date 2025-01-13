<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function show(){
        $students = \App\Models\Student::all();
        
        return view('students', ['students' => $students]);
    }

    function allStudents(){
        $students = Student::all();
        
        return view('students', ['students' => $students]);
    }
    function add(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->batch = $request->batch;
        $student->save();
        if($student){
            return redirect('student/list');
        }else{
            return "Student not added";
        }
    }
    function edit($id){
        return "Edit student with id: $id";
    }
    function delete($id){
        return "Delete student with id: $id";
    }
}

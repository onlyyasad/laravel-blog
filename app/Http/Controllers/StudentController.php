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
        $student = Student::find($id);
        return view('edit-student', ['student' => $student]);
    }
    function editStudent(Request $request,$id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->batch = $request->batch;
        $student->save();
        if($student){
            return redirect('student/list');
        }else{
            return "Student not updated";
        }
    }
    function delete($id){
        $deleteStudent = Student::destroy($id);
        if($deleteStudent){
            return redirect('student/list');
        }else{
            return "Student not deleted";
        }
    }

    function search(Request $request){
        $search = $request->search;
        $students = Student::where('name', 'like', '%'.$search.'%')->get();
    
        return view('students', ['students' => $students]);
    }
}

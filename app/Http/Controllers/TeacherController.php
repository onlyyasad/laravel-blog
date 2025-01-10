<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    function show(){
        $result = DB::table("teachers")->get();
        return $result;
    }
    function add(){
        $teacher = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890'
        ];

        $result = DB::table("teachers")->insert($teacher);

        if($result){
            return "Teacher has been added successfully";
        }else{
        return "Not added successfully";
        }

    }
    function edit(){
        $phone = '0987654321';

        $result = DB::table("teachers")->where('phone', '1234567890')->update(['phone' => $phone]);
        
        if($result){
            return "Phone has been updated successfully";
        }else{
        return "Not updated successfully";
        }
    }
    function delete($id){
        return "Delete teacher with id: $id";
    }
}

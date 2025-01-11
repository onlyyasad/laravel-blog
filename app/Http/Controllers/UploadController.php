<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $req){
        // Store file explicitly in the 'public' disk
        $file = $req->file('file')->store('public', ['disk' => 'public']);
        $fileName = basename($file); // Get the file name

        return view('display', ['image' => $fileName]);
    }
}

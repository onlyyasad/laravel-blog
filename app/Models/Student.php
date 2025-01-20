<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use HasFactory;

    function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    function setPhoneAttribute($value){
        $this->attributes['phone'] = "+880".$value;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id', 'first_name','last_name','student_number','image','grade', 'valid'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $fillable=[
       'name','poster','pdf','ppt'
    ];
}

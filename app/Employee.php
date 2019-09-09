<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['user_id', 'first_name', 'last_name','	middle_name','phone','email','job_title','city','country'];
}

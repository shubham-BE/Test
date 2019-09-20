<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'dob',
        'profile_pic',
        'mobile',
        'university',
        'gender',
        'address'
    ];
}

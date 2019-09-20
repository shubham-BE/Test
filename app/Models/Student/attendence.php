<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class attendence extends Model
{
    protected $table = 'attendance';

    protected $fillable = [
        'student_id',
        'date',
        'is_present',
        'is_absent'
    ];

    public static function getStudents()
    {
        return \DB::table('attendance as c')
            ->leftjoin('students', 'students.id', '=', 'c.student_id')
            ->select(
                'c.*',
                'students.name as student_name',
                'students.email as student_email'
            )
            ->get();
    }
}

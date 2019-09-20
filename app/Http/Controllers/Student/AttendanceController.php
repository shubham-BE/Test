<?php

namespace App\Http\Controllers\Student;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student\attendence;
use App\Models\Student\Student;
use mysql_xdevapi\Result;

class AttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('student.student_attendance');
    }

    public function getStudentList()
    {
        $data = attendence::getStudents();
        return $data;
    }

    //request all student data and date
    public function saveStudentAttendance(Request $request)      // get all student data back here
    {
//        $data = $request->data;
        foreach($request->data as $data)
        {
            if (isset($data['id']))
            {
                $att = attendence::find($data['id']);
            }
            else
            {
                $att = new attendence();
            }

            $att->student_id = $data['student_id'];
            $att->is_present = $data['is_present'];
            $att->is_absent = $data['is_absent'];
            $att->date = Carbon::now()->format('d-m-Y');
            $att->save();
        }

        return redirect("/student_attendence");
    }
}

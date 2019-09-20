<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Student\Student;
use App\Models\Student\attendence;

class StudentsController extends Controller
{
    public function index()
    {
        return view('Student.showAllStudents');
    }
    public function addStudent()
    {
        return view('Student.addStudent');
    }
    public function newStudentDetails(Request $request)
    {
        //store values to DB
        $data = $request->data;

        $user = new User();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->is_teacher = 0;
        $user->is_student = 1;
        $user->save();

        $student = new Student();
        $student->user_id = $user->id;
        $student->name = $user->name;
        $student->email = $user->email;
        $student->save();

         $attendence = new attendence();
         $attendence->student_id = $student->id;
         $attendence->save();
    }
    public function getAllStudents()
    {
        return Student::all();
    }
    public function viewStudentProfile()
    {
        return view('student.student_profile');
    }
    public function getStudentProfileDetails(Request $request)
    {
        $user_id = $request->user_id;

        $data = Student::where('user_id', '=', $user_id)->first();
        return $data;
        /*  $data['all_student'] = User::all();
          return $data;*/
    }
    public function delete(Request $request)
    {
        $data = $request->data;

        $student = Student::where('id', $data['id'])->first();
        $student->delete();
        $user = User::where('id', $data['user_id'])->first();
        $user->delete();
        return $this->getAllStudents();
    }
    public function updateStudentProfile(Request $request)
    {
        $data = $request->data;

        $student = Student::where('user_id', '=', $data['user_id'])->first();
        $student->name = $data['name'];
        $student->dob = $data['dob'];
        $student->email = $data['email'];
        $student->profile_pic = $data['profile_pic'];
        $student->mobile = $data['mobile'];
        $student->gender = $data['gender'];
        $student->university = $data['university'];
        $student->address = $data['address'];

        $student->save();
    }
}

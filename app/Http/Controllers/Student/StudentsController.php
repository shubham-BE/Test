<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Student\Student;

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

        return $user;
    }
    public function getAllStudents()
    {
        return Student::all();
    }
    public function delete(Request $request)
    {
        $data = $request->data;

        $student = Student::where('id', $data['id'])->first();
        $student->delete();
        $user = User::where('id', $data['user_id'])->first();
        $user->delete();
        return $this->getAllStudent();
    }

    
}

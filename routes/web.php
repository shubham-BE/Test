<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Add Student
Route::get('/add', 'Student\StudentsController@addStudent');
Route::post('/api/add/save', 'Student\StudentsController@newStudentDetails');

//Delete Student
Route::post('/api/all_student/delete_student', 'Student\StudentsController@delete');

//show all students
Route::get('all_students', 'Student\StudentsController@index');
Route::get('/api/all_students/get_all_details', 'Student\StudentsController@getAllStudents');

// show student profile
Route::get('/student_profile', 'Student\StudentsController@viewStudentProfile');
Route::post('/api/student_profile/get_student_profile', 'Student\StudentsController@getStudentProfileDetails');
Route::post('/api/student_profile/save', 'Student\StudentsController@updateStudentProfile');

//attendance
Route::get('/student_attendence', 'Student\AttendanceController@index');
Route::get('/api/student_attendence/get_student_list', 'Student\AttendanceController@getStudentList');
Route::post('/api/student_attendence/save_attendence', 'Student\AttendanceController@saveStudentAttendance');

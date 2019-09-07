<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Add Student
Route::get('/add', 'Student\StudentsController@addStudent');
Route::post('/api/add/save', 'Student\StudentsController@newStudentDetails'); 

//show all students
Route::get('all_students', 'Student\StudentsController@index');
Route::get('/api/all_students/get_all_details', 'Student\StudentsController@getAllStudents');
Route::post('/api/all_students/delete_student', 'Student\StudentsController@delete');
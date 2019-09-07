@extends('layouts.master')

@section('content')
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="{{ URL::asset('js/angular/student/add_student_controller.js') }}"
            type="text/javascript"></script>

    

    <div class="container" ng-app="LaravelApp" ng-controller="addStudentController">
        <div class="jumbotron">
            <b><strong><h2>Add a Student</h2></strong></b>
            
            <br>
            
            <form action="" >
        
                <div class="form-group">
                    <input type="text" name="name" placeholder="NAME" class="form-control" ng-model="data.name">
                </div>
                <!-- <div class="form-group">
                    <input type="text" name="dob" placeholder="DOB" class="form-control" ng-model="data.dob">
                </div> -->
                <div class="form-group">
                    <input type="text" name="email" placeholder="EMAIL" class="form-control" ng-model="data.email">
                </div>
                <div class="form-group">
                    <input type="text" name="password" placeholder="PASSWORD" class="form-control" ng-model="data.password">
                </div>
                <!-- <div class="form-group">
                    <input type="text" name="profile_pic" placeholder="PIC" class="form-control" ng-model="">
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" placeholder="MOBILE" class="form-control" ng-model="data.mobile">
                </div>
                <div class="form-group">
                    <input type="text" name="gender" placeholder="GENDER" class="form-control" ng-model="data.gender">
                </div>
                <div class="form-group">
                    <input type="text" name="university" placeholder="UNIVERSITY" class="form-control" ng-model="data.university">
                </div>
                <div class="form-group">
                    <input type="text" name="address" placeholder="ADDRESS" class="form-control" ng-model="data.address">
                </div> -->
                <button class="btn btn-success" ng-click="Save()">Add student</button>
            </form>
        </div>
    </div>
@endsection
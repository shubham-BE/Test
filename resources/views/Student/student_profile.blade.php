@extends('layouts.master')
@section('content')
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="{{ URL::asset('js/angular/student/profile_controller.js') }}"
            type="text/javascript"></script>

            <div class="container" ng-app="LaravelApp" ng-controller="profileController">
                <div class="jumbotron">
                    <h2>User profile</h2>
                    <br>
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="NAME" class="form-control" ng-model="data.name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="dob" placeholder="DOB" class="form-control" ng-model="data.dob">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="EMAIL" class="form-control" ng-model="data.email">
                        </div>
                        <div class="form-group">
                            <input type="file" name="profile_pic" class="form-control" ng-model="data.profile_pic">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="MOBILE" class="form-control" ng-model="data.mobile">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="GENDER" class="form-control" ng-model="data.gender">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="UNIVERSITY" class="form-control" ng-model="data.university">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="ADDRESS" class="form-control" ng-model="data.address">
                        </div>
                        <button class="btn btn-success" ng-click="Save(data)">Update</button>
                    </form>
                </div>
            </div>
@endsection
@extends('layouts.master')
@section('content')

    <meta name="_token" content="{{ csrf_token() }}">
    <script src="{{ URL::asset('js/angular/student/attendance_controller.js') }}"
            type="text/javascript"></script>

    <div class="container-fluid" ng-app="LaravelApp" ng-controller="AttendenceController">
        <div class="jumbotron">
{{--            <form>--}}
{{--                <input type="text" class="date-picker" name="date" placeholder="DATE" ng-model="date">--}}
{{--            </form>--}}
                <table class="table table-dark">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Attendence</th>
                    </thead>
                    <tbody>
                    <tr ng-repeat="t in data">
                        <td ng-bind="t.student_id"></td>
                        <td ng-bind="t.student_name"></td>
                        <td ng-bind="t.student_email"></td>
                        <td>
                            <div>
                                <input type="radio" ng-model="t.is_present" name="a_<%t.student_id%>" id="a_<%t.student_id%>" ng-value="1" ng-click="t.is_absent = 0">Present
                                <input type="radio" ng-model="t.is_absent" name="a_<%t.student_id%>" id="a_<%t.student_id%>" ng-value="1" ng-click="t.is_present = 0" >Absent
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            <button type="button" ng-click="Save()">Save</button>
        </div>
    </div>

@endsection

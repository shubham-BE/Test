@extends('layouts.master')
@section('content')
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="{{ URL::asset('js/angular/student/show_all_students_controller.js') }}"
                type="text/javascript"></script>
    <div class="container" ng-app="LaravelApp" ng-controller="showAllStudentsController">
        <div class="jumbotron">
            <table class="table table-dark">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    <tr ng-repeat="t in data">
                        <td ng-bind="t.id"></td>
                        <td><%t.name%></td>
                        <td ng-bind="t.email"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
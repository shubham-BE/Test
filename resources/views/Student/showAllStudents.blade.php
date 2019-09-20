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
                    <th class="text-nowrap">Action</th>
                </thead>
                <tbody>
                    <tr ng-repeat="t in data">
                        <td ng-bind="t.id"></td>
                        <td><a ng-click="openProfile(t)"><%t.name%></a></td>
                        <td ng-bind="t.email"></td>
                        <td><button type="submit" class="btn btn-danger btn-icon-anim btn-circle" ng-click="delete(t)"><i class="icon-trash">DELETE</i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
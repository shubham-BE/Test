app.controller('showAllStudentsController', function ($scope, $http, $location, $window)
{

    $scope.loading = false;

    $scope.data = [];


    $scope.init = function ()
    {
        $scope.loading = true;
        $http.get(url + 'api/all_students/get_all_details')
            .then(function (response)
            {
                $scope.data = response.data;
                $scope.loading = false;
            })
            .catch(function ()
            {

                $scope.loading = false;
            });
    };

    $scope.openProfile = function (t)
    {
        window.location.href = url + 'student_profile?user_id=' + t.user_id;
    };

    $scope.delete = function (t)
    {
        $scope.loading = true;
        $http.post(url + '/api/all_student/delete_student', {
            data: t
        })
            .then(function (response)
            {
                $scope.data = response.data;
                $scope.loading = false;
            })
            .catch(function ()
            {
                $scope.loading = false;
            });
    };

    $scope.init();
});
app.controller('AttendenceController', function ($scope, $http, $location, $window)
{
     $scope.loading = false;

    $scope.data = {};
    // $scope.is_ = [];


    $scope.init = function ()
    {
        $scope.loading = true;
        $http.get(url + 'api/student_attendence/get_student_list')
            .then(function (response)
            {
                $scope.data = response.data;    // student and attendence list is stored in scope.data
                console.log($scope.data);
                $scope.loading = false;
            })
            .catch(function ()
            {
                $scope.loading = false;
            });
    };
    $scope.Save = function ()
    {
        console.log($scope.data);
        $scope.loading = true;
        $http.post(url + 'api/student_attendence/save_attendence', {
            data : $scope.data
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




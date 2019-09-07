app.controller('addStudentController', function ($scope, $http, $location, $window, $rootScope) {
    $scope.loading = false;

    $scope.data = {};
/*
    $scope.init = function () {
        $scope.loading = true;
        $http.get(url + 'api/add_student/get_all_details')
            .then(function (response) {

                $scope.loading = false;
            })
            .catch(function () {
                $scope.loading = false;
            });
    };*/
    $scope.Save = function ()
    {
        $scope.loading = true;
        $http.post(url + 'api/add/save', {
            data: $scope.data
        })
            .then(function (response)
            {
                window.location.href = url + "all_students"; 
            })
            .catch(function (e)
            {
              /*  errorMsg();*/
            });
    };
  /*  $scope.init();*/
});
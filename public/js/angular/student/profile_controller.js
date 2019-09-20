app.controller('profileController', function ($rootScope, $scope, $http, $window, $location)
{
    $scope.loading = false;
    $scope.user_id = $location.search().user_id;
    $scope.data = [];

    $scope.init = function ()
    {
        $scope.loading = true;
        $http.post(url + 'api/student_profile/get_student_profile' ,{
            user_id: $scope.user_id
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
    }
    $scope.Save = function (data)
    {
        $scope.loading = true;
        $http.post(url + 'api/student_profile/save', {
            data: data
        })
            .then(function (response)
            {
                window.location.href = url + 'all_students';
            })
            .catch(function ()
            {
                $scope.loading = false;
            });
    };

    $scope.init();
});
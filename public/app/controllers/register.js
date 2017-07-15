app.controller('registerController',registerController);
 function registerController($scope, $http, API_URL,FlashService) {
    $scope.toggle = function(modalstate) {
        switch (modalstate) {
            case 'register':
            $('#RegisterModal').modal('show');
                break;
            case 'login':
            $('#LoginModal').modal('show');
                break;
            default:
                break;
        }
        
    }
        $scope.save = function() {
         var url = API_URL + "register";
        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.user),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(response) {
            var res_data=response.data;
            if(res_data.status=='error')
            {
                $scope.flash=FlashService.Error(res_data.message);
            }
            else{
          $scope.flash=FlashService.Success(res_data.message);
         this.formRegister.reset();
            }
            //location.reload();
        },function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }
            $scope.login = function() {
        var url = API_URL + "login";
        
        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.login),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(response) {
        var res_data=response.data;
            if(res_data.status=='error')
            {
                $scope.flash=FlashService.Error(res_data.message);
            }
            else{
          $scope.flash=FlashService.Success(res_data.message);
          window.location.href="dashboard";
            }
        },function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }
}
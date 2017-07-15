app.controller('ContactController', function($scope, $http, API_URL,FlashService) {
    //retrieve employees listing from API
            $scope.id='add';
            fetch_records();
            function fetch_records()
            {
            $http.get(API_URL + "contact_fetch")
            .then(function(response) {
                var obj = response.data;
                $scope.contacts =obj;
            });
            }
    
    //show modal form
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;
        switch (modalstate) {
            case 'add':
             $scope.id='add';
                $scope.form_title = "Add New Contact";
                break;
            case 'edit':
                $scope.form_title = "Contact Detail";
                $scope.id = id;
                $http.get(API_URL + 'contact_fetch/' + id)
                        .then(function(response) {
                            $scope.contact = response.data;
                        });
                break;
            default:
                break;
        }
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function(modalstate, id) {
        if(id=='add')
        {
        var url = API_URL + "contact_save";
        }
        else{
        var url = API_URL + "contact_update/"+id;
        }
        
        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.contact),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(response) {
             $('#myModal').modal('hide');
            fetch_records();
        var res_data=response.data;
        $scope.flash=FlashService.Success(res_data.message);
       this.frmEmployees.reset();
        },function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }

    //delete record
    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
        var url = API_URL + "contact_delete/"+id;
                $http({
            method: 'POST',
            url: url,
            data: $.param($scope.contact),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(response) {
            fetch_records();
        var res_data=response.data;
        $scope.flash=FlashService.Success(res_data.message);

        },function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
        } else {
            return false;
        }
    }
});
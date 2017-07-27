/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('AdminController',function($scope,$rootScope,DashboardService,AdminService,$window,GeneralService,$translate){

            $('body').on('hidden.bs.modal', function (e) {
            if($('.modal').hasClass('in')) {
                $('body').addClass('modal-open');
            }
            });
        $scope.nombre = "hola";
        $scope.houses = {};
        $scope.customer = {};
        $scope.technician = {};
        $scope.auth = {};
        $scope.auth.message = "";
        $scope.newCustomer = "";
        $scope.getCustomerInformation = function(customerId)
        {
            //if($scope.customer.length===undefined)
            {
                DashboardService.getCustomerInformation(customerId)
                    .then(function(response){
                        console.log(response);
                        $scope.customer = response.data;
                        $scope.customer.fullName = $scope.customer.firstName + " " + $scope.customer.lastName;


                    },function(error){

                    })
            }
        }

        $scope.getHousesInformation = function(customerId) {
          DashboardService.getHousesInformation(customerId)
                .then(function(response){
                    console.log(response.data);
                    $scope.houses = response.data;

                },function(error){

                })
        }

        $scope.getSelectedHouseInfo = function(houseId)
        {
            var house = $.grep($scope.houses, function (h) { return h.id == houseId; });
            if(house.length>0)
            {
                $scope.selectedHouse = house[0];

            }
        }


        $scope.getTechnicianInformation = function(customerId)

        {
            AdminService.getTechnicianInformation(customerId)
                .then(function(response){
                    console.log(response.data);
                    $scope.technician = response.data;

                }, function (error) {

                })

        }


$scope.addNewCustomer = function()

{
    if(GeneralService.isInvalid($scope.newCustomer.firstName))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
        $window.document.getElementById("firstName").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.lastName))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_LASTNAME');
        $window.document.getElementById("lastName").focus();
    }

    else if(GeneralService.isInvalid($scope.newCustomer.email))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_EMAIL');
        $window.document.getElementById("email").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.pwd))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_PASSWORD');
        $window.document.getElementById("pwd").focus();
    }

    else if(GeneralService.isInvalid($scope.newCustomer.cPwd))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_REPASSWORD');
        $window.document.getElementById("cPwd").focus();
    }
    else if($scope.newCustomer.pwd!=$scope.newCustomer.cPwd)
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_DONTMATCH');
        $scope.user.pwd = "";
        $scope.user.cPwd = "";
        $window.document.getElementById("pwd").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.phonePrimary))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
        $window.document.getElementById("phonePrimary").focus();
    }

    else if(GeneralService.isInvalid($scope.newCustomer.country))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
        $window.document.getElementById("country").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.state))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_STATE');
        $window.document.getElementById("state").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.city))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
        $window.document.getElementById("city").focus();
    }

    else if(GeneralService.isInvalid($scope.newCustomer.address))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
        $window.document.getElementById("address").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.zipCode))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_ZIPCODE');
        $window.document.getElementById("zipCode").focus();
    }

    else
    {
        $('#frm_register').submit();
    }


}





        $scope.getCustomerInformation();
        $scope.getHousesInformation();

    })
	
	

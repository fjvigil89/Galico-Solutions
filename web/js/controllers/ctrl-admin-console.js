/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('AdminController',function($scope,$rootScope,DashboardService,$window,GeneralService,$translate){

            $('body').on('hidden.bs.modal', function (e) {
            if($('.modal').hasClass('in')) {
                $('body').addClass('modal-open');
            }
            });

        $scope.prueba="hola";
        $scope.customerUpdated = {};
        $scope.getCustomerInformation = function()
        {
            //if($scope.customer.length===undefined)
            {
                var customerId = $window.document.getElementById("customerId").value;
                AdminService.getCustomerInformation(customerId)
                    .then(function(response){
                        console.log(response);
                        $scope.customer = response.data;
                        $scope.customer.fullName = $scope.customer.firstName + " " + $scope.customer.lastName;

                        angular.copy($scope.customer, $scope.customerUpdated);
                    },function(error){

                    })
            }
        }

        $scope.getHousesInformation = function() {
            var customerId = $window.document.getElementById("customerId").value;
            AdminService.getHousesInformation(customerId)
                .then(function(response){
                    console.log(response.data);
                    $scope.houses = response.data;

                },function(error){

                })
        }


        $scope.updateCustomer = function()
        {
            if(GeneralService.isInvalid($scope.customerUpdated.lastName))
            {
                $scope.update.error = $translate.instant('ERR_DASHBOARD_LASTNAME');
                $window.document.getElementById("lastName").focus();
            }
            else if(GeneralService.isInvalid($scope.customerUpdated.firstName))
            {
                $scope.update.error = $translate.instant('ERR_DASHBOARD_FIRSTNAME');
                $window.document.getElementById("firstName").focus();
            }
            else if(GeneralService.isInvalid($scope.customerUpdated.email))
            {
                $scope.update.error = $translate.instant('ERR_DASHBOARD_ADDRESSVALIDE');
                $window.document.getElementById("email").focus();
            }
            else if(GeneralService.isInvalid($scope.customerUpdated.phonePrimary))
            {
                $scope.update.error = $translate.instant('ERR_DASHBOARD_NUMBER');
                $window.document.getElementById("phonePrimary").focus();
            }
            else if(GeneralService.isInvalid($scope.customerUpdated.country))
            {
                $scope.update.error = $translate.instant('ERR_DASHBOARD_COUNTRY');
                $window.document.getElementById("country").focus();
            }
            else if(GeneralService.isInvalid($scope.customerUpdated.city))
            {
                $scope.update.error = $translate.instant('ERR_DASHBOARD_CITY');
                $window.document.getElementById("city").focus();
            }
            else if(GeneralService.isInvalid($scope.customerUpdated.address))
            {
                $scope.update.error = $translate.instant('ERR_DASHBOARD_ADDRESS');
                $window.document.getElementById("address").focus();
            }
            else
            {
                $scope.update.error = "";
                DashboardService.updateCustomer($scope.customerUpdated)
                    .then(function(response){
                        console.log(response);
                        var resp = response.data;
                        if(resp.updateStatus> 0)
                        {
                            $scope.customer = resp;
                            $('#editModal').modal('hide');
                        }
                        else
                        {
                            //angular.copy($scope.customer,$scope.customerUpdated);
                            $scope.update.error = $translate.instant('ERR_DASHBOARD_INF_UPDATE');
                        }

                    },function(error){
                        $scope.update.error = $translate.instant('ERR_DASHBOARD_INF_UPDATE');
                    })
            }
        }
    })
	
	

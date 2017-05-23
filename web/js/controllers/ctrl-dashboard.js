/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('DashboardController',function($scope,$rootScope,DashboardService,$window,GeneralService){
            $scope.customer = {};
            $scope.update = {};
            $scope.update.error = ""

            $scope.getCustomerInformation = function()
            {
                if($scope.customer.length===undefined)
                {
                    var customerId = $window.document.getElementById("customerId").value;
                    DashboardService.getCustomerInformation(customerId)
                        .then(function(response){
                            console.log(response);
                            $scope.customer = response.data;
                        },function(error){

                        })
                }
            }

            $scope.updateCustomer = function()
            {
                if(GeneralService.isInvalid($scope.customer.lastName))
                {
                    $scope.update.error = "Please provide your last name";
                    $window.document.getElementById("lastname").focus();
                }
                else if(GeneralService.isInvalid($scope.customer.firstName))
                {
                    $scope.update.error = "Please provide your first name";
                    $window.document.getElementById("firstname").focus();
                }
                else if(GeneralService.isInvalid($scope.customer.email))
                {
                    $scope.update.error = "Please provide a valid email address";
                    $window.document.getElementById("email").focus();
                }
                else if(GeneralService.isInvalid($scope.customer.phonePrimary))
                {
                    $scope.update.error = "Please provide a phone number";
                    $window.document.getElementById("phonePrimary").focus();
                }
                else if(GeneralService.isInvalid($scope.customer.country))
                {
                    $scope.update.error = "Please provide your country";
                    $window.document.getElementById("country").focus();
                }
                else if(GeneralService.isInvalid($scope.customer.city))
                {
                    $scope.update.error = "Please provide your city";
                    $window.document.getElementById("city").focus();
                }
                else if(GeneralService.isInvalid($scope.customer.address))
                {
                    $scope.update.error = "Please provide your address";
                    $window.document.getElementById("address").focus();
                }
                else
                {
                    DashboardService.updateCustomer($scope.customer)
                        .then(function(response){
                            console.log(response);
                            $('#editModal').modal('hide');
                        },function(error){

                        })
                }
            }
    })

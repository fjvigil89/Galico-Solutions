/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('DashboardController',function($scope,$rootScope,DashboardService,$window,GeneralService){
            $scope.customer = {};
            $scope.customerUpdated = {};
            $scope.update = {};
            $scope.newSubscription = {};

            $scope.newSubscription.customerId = $window.document.getElementById("customerId").value;

            $scope.newSubscription.contractAccepted = false;
            $scope.update.error = "";

            $scope.getCustomerInformation = function()
            {
                //if($scope.customer.length===undefined)
                {
                    var customerId = $window.document.getElementById("customerId").value;
                    DashboardService.getCustomerInformation(customerId)
                        .then(function(response){
                            console.log(response);
                            $scope.customer = response.data;
                            $scope.customer.fullName = $scope.customer.firstName + " " + $scope.customer.lastName;

                            angular.copy($scope.customer, $scope.customerUpdated);
                        },function(error){

                        })
                }
            }

            $scope.updateCustomer = function()
            {
                if(GeneralService.isInvalid($scope.customerUpdated.lastName))
                {
                    $scope.update.error = "Please provide your last name";
                    $window.document.getElementById("lastName").focus();
                }
                else if(GeneralService.isInvalid($scope.customerUpdated.firstName))
                {
                    $scope.update.error = "Please provide your first name";
                    $window.document.getElementById("firstName").focus();
                }
                else if(GeneralService.isInvalid($scope.customerUpdated.email))
                {
                    $scope.update.error = "Please provide a valid email address";
                    $window.document.getElementById("email").focus();
                }
                else if(GeneralService.isInvalid($scope.customerUpdated.phonePrimary))
                {
                    $scope.update.error = "Please provide a phone number";
                    $window.document.getElementById("phonePrimary").focus();
                }
                else if(GeneralService.isInvalid($scope.customerUpdated.country))
                {
                    $scope.update.error = "Please provide your country";
                    $window.document.getElementById("country").focus();
                }
                else if(GeneralService.isInvalid($scope.customerUpdated.city))
                {
                    $scope.update.error = "Please provide your city";
                    $window.document.getElementById("city").focus();
                }
                else if(GeneralService.isInvalid($scope.customerUpdated.address))
                {
                    $scope.update.error = "Please provide your address";
                    $window.document.getElementById("address").focus();
                }
                else
                {
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
                                $scope.update.error = "Your information could not be updated. Please try again.";
                            }

                        },function(error){
                            $scope.update.error = "Your information could not be updated. Please try again.";
                        })
                }
            }

            $scope.getHousesInformation = function() {
                var customerId = $window.document.getElementById("customerId").value;
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

        $scope.getPaymentsHistory = function(houseId) {
            DashboardService.getPaymentsHistory(houseId)
                .then(function(response){
                    console.log(response.data);
                    $scope.subscriptions = response.data;

                },function(error){

                })
        }

        $scope.getHouseRequests = function() {
            $scope.requests = [];

            if($scope.selectedHouseId!="")
            {
                DashboardService.getHouseRequests($scope.selectedHouseId)
                .then(function(response){
                    console.log(response.data);
                    $scope.requests = response.data;

                },function(error){

                })
            }

        }

        $scope.subscribeNewHouse = function()
        {
            if(GeneralService.isInvalid($scope.newSubscription.planId))
            {
                $scope.newSubscription.error = "Please choose a plan";
                $window.document.getElementById("subPlanId").focus();
            }
            else if(GeneralService.isInvalid($scope.newSubscription.firstName))
            {
                $scope.newSubscription.error = "Please enter your contact first name";
                $window.document.getElementById("subContactFirstName").focus();
            }
            else if(GeneralService.isInvalid($scope.newSubscription.lastName))
            {
                $scope.newSubscription.error = "Please enter your contact last name";
                $window.document.getElementById("subContactLastName").focus();
            }

            else if(GeneralService.isInvalid($scope.newSubscription.phonePrimary))
            {
                $scope.newSubscription.error = "Please enter at least one phone number";
                $window.document.getElementById("subContactLastName").focus();
            }

            else if(GeneralService.isInvalid($scope.newSubscription.country))
            {
                $scope.newSubscription.error = "Please choose a country";
                $window.document.getElementById("subCountry").focus();
            }

            /*else if(GeneralService.isInvalid($scope.newSubscription.state))
            {
                $scope.newSubscription.error = "Please enter a state";
                $window.document.getElementById("subState").focus();
            }*/

            else if(GeneralService.isInvalid($scope.newSubscription.city))
            {
                $scope.newSubscription.error = "Please enter a city";
                $window.document.getElementById("subCity").focus();
            }

            else if(GeneralService.isInvalid($scope.newSubscription.address))
            {
                $scope.newSubscription.error = "Please enter the address of the house";
                $window.document.getElementById("subAddress").focus();
            }
            else
            {

                DashboardService.subscribeHouse($scope.newSubscription)
                .then(function(response){
                    console.log(response.data);
                    var rs = response.data;
                    if(rs.subscriptionStatus==1)
                    {
                        $("#addHouseModal").modal('hide');
                        var newHouse = {};
                        angular.copy($scope.newSubscription, newHouse);
                        newHouse.id = rs.houseId;
                        newHouse.agentNumber = rs.agentNumber;
                        newHouse.plan = rs.plan;
                        newHouse.subscriptionDate = rs.subscriptionDate;
                        newHouse.contactFullName = newHouse.firstName + " " + newHouse.lastName;

                        $scope.houses.push(newHouse);
                    }
                    else
                    {
                        $scope.newSubscription.error = "The new house could not be added. Please try again";
                    }

                },function(error){

                })
            }

        }

        // CALL METHODS ONLOAD

        $scope.getCustomerInformation();
        $scope.getHousesInformation();

    })

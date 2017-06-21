/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('DashboardController',function($scope,$rootScope,DashboardService,$window,GeneralService,$translate){
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
                $scope.newSubscription.error =  $translate.instant('ERR_DASHBOARD_PLAN');
                $window.document.getElementById("subPlanId").focus();
            }
            else if(GeneralService.isInvalid($scope.newSubscription.firstName))
            {
                $scope.newSubscription.error =  $translate.instant('ERR_DASHBOARD_CONTACTFIRSTNAME');
                $window.document.getElementById("subContactFirstName").focus();
            }
            else if(GeneralService.isInvalid($scope.newSubscription.lastName))
            {
                $scope.newSubscription.error =  $translate.instant('ERR_DASHBOARD_CONTACTLASTNAME');
                $window.document.getElementById("subContactLastName").focus();
            }

            else if(GeneralService.isInvalid($scope.newSubscription.phonePrimary))
            {
                $scope.newSubscription.error =  $translate.instant('ERR_DASHBOARD_PHONENUMBER');
                $window.document.getElementById("subContactLastName").focus();
            }

            else if(GeneralService.isInvalid($scope.newSubscription.country))
            {
                $scope.newSubscription.error =  $translate.instant('ERR_DASHBOARD_CHOOSECOUNTRY');
                $window.document.getElementById("subCountry").focus();
            }

            /*else if(GeneralService.isInvalid($scope.newSubscription.state))
            {
                $scope.newSubscription.error = "Please enter a state";
                $window.document.getElementById("subState").focus();
            }*/

            else if(GeneralService.isInvalid($scope.newSubscription.city))
            {
                $scope.newSubscription.error = $translate.instant('ERR_DASHBOARD_ENTERCITY');
                $window.document.getElementById("subCity").focus();
            }

            else if(GeneralService.isInvalid($scope.newSubscription.address))
            {
                $scope.newSubscription.error = $translate.instant('ERR_DASHBOARD_ADDRESSHOUSE');
                $window.document.getElementById("subAddress").focus();
            }
            else
            {
                $scope.newSubscription.error = "";
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
                        $scope.newSubscription.error = $translate.instant('ERR_DASHBOARD_NOTADDHOUSE');
                    }

                },function(error){

                })
            }

        }

  
		
		// CALL METHODS ONLOAD

        $scope.getCustomerInformation();
        $scope.getHousesInformation();
      

    })
	
	

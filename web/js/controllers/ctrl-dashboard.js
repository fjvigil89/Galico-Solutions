/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('DashboardController',function($scope,$rootScope,DashboardService,$window,GeneralService,$translate){
            /*FOR MULTIPLE MODAL WINDOWS*/
            $('body').on('hidden.bs.modal', function (e) {
                if($('.modal').hasClass('in')) {
                    $('body').addClass('modal-open');
                }
            });

            /*END ::*/

            $scope.customer = {};
            $scope.customerUpdated = {};
            $scope.update = {};
            $scope.newSubscription = {};
            $scope.showPaymentForm = false;
			$scope.showServiceForm = false;
            $scope.showInvoice = false;

            $scope.paymentInfo = {};
            $scope.paymentInfo.planName = "plan Basic";
            $scope.paymentInfo.amount = "29.99";


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

        $scope.getPlanPrice = function()
        {
            DashboardService.getPlanPrice($scope.newSubscription.country,$scope.newSubscription.planId)
                .then(function(response){

                    $scope.newSubscription.amount = response.data.price;
                    $scope.newSubscription.currency = response.data.currency;

                    $scope.paymentInfo.planName = response.data.planName;
                    $scope.paymentInfo.amount = response.data.price;

                },function(error){
                    console.log(error);
                })
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
		
		$scope.goToPaymentForm = function()
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
				$scope.showPaymentForm = true;

			}
			
		}
		
		$scope.goToHouseInfoForm = function()
		{
			$scope.showPaymentForm = false;
		}

        $scope.gotoserviceForm = function()
        {
            $scope.showServiceForm = true;
        }

        $scope.gotodetailsForm = function()
        {
            $scope.showServiceForm = false;
        }


        $scope.gotopaysForm = function()
        {
            $scope.showInvoice = false;
        }

        $scope.gotoinvoiceForm = function()
        {
            $scope.showInvoice = true;
        }


        $scope.addRecurringPayments = function()
        {
            if(GeneralService.isInvalid($scope.paymentInfo.nameOnCard))
            {
                $scope.paymentInfo.error =  $translate.instant('ERR_DASHBOARD_NAMEONCARD');
                $window.document.getElementById("nameOnCard").focus();
            }
            else if(GeneralService.isInvalid($scope.paymentInfo.cardType))
            {
                $scope.paymentInfo.error =  $translate.instant('ERR_DASHBOARD_CARDTYPE');
                $window.document.getElementById("cardType").focus();
            }
            else if(GeneralService.isInvalid($scope.paymentInfo.cardNumber))
            {
                $scope.paymentInfo.error =  $translate.instant('ERR_DASHBOARD_CARDNUMBER');
                $window.document.getElementById("cardNumber").focus();
            }

            else if(GeneralService.isInvalid($scope.paymentInfo.cvv))
            {
                $scope.paymentInfo.error =  $translate.instant('ERR_DASHBOARD_CVV');
                $window.document.getElementById("cvv").focus();
            }
            else if(GeneralService.isInvalid($scope.paymentInfo.expMonth))
            {
                $scope.paymentInfo.error =  $translate.instant('ERR_DASHBOARD_EXPMONTH');
                $window.document.getElementById("expMonth").focus();
            }
            else if(GeneralService.isInvalid($scope.paymentInfo.expYear))
            {
                $scope.paymentInfo.error =  $translate.instant('ERR_DASHBOARD_EXPYEAR');
                $window.document.getElementById("expYear").focus();
            }

            else
            {
                $scope.paymentInfo.customerId = $scope.newSubscription.customerId;
                $scope.paymentInfo.country = $scope.newSubscription.country;
                $scope.paymentInfo.state = $scope.newSubscription.state;
                $scope.paymentInfo.city = $scope.newSubscription.city;
                $scope.paymentInfo.address = $scope.newSubscription.address;
                $scope.paymentInfo.zipCode = $scope.newSubscription.zipCode;

                $scope.paymentInfo.cFirstName = $scope.newSubscription.firstName;
                $scope.paymentInfo.cLastName = $scope.newSubscription.lastName;
                $scope.paymentInfo.cPhonePrimary = $scope.newSubscription.phonePrimary;
                $scope.paymentInfo.cPhoneAlternate = $scope.newSubscription.phoneAlternate;


                DashboardService.addRecurringPayments($scope.paymentInfo)
                    .then(function(response){
                        console.log(response);
                    },function(error){
                        console.log(error);
                    })
            }

        }

        // CALL METHODS ONLOAD
        $scope.getCustomerInformation();
        $scope.getHousesInformation();
      

    })
	
	

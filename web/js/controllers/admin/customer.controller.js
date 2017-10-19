/**
 * Created by jrhod on 2017-09-26.
 */
angular.module("gpApp")
    .controller('CustomerController', function ($scope, $rootScope, DashboardService, AdminService, RouterService, $window, GeneralService, $translate) {

        $scope.error = {};
        $scope.action = "add";
        $scope.newCustomer = {};
        $scope.newHouse = {};
        $scope.paymentInfo = {};
        $scope.proforma = {};

        $scope.step = 1;

        $scope.getCustomerInformation = function (customerId) {
            //if($scope.customer.length===undefined)
            {
                DashboardService.getCustomerInformation(customerId)
                    .then(function (response) {
                        //console.log(response);
                        $scope.customer = response.data;
                        $scope.customer.fullName = $scope.customer.firstName + " " + $scope.customer.lastName;

                    }, function (error) {

                    })
            }
        }

        $scope.addCustomer = function () {
            $scope.action = "add";

            if (validateCustomer($scope.newCustomer)) {
                $('#frm_new_customer').submit();
            }
        }

        $scope.updateCustomer = function () {
            $scope.action = "update";
            if (validateCustomer($scope.customer)) {
                $('#frm_update_customer').submit();
            }
        }

        function validateCustomer(customer) {
            var formValid = true;
            $scope.error.message = "";
            if (GeneralService.isInvalid(customer.firstName)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
                $window.document.getElementById("firstName").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.lastName)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_LASTNAME');
                $window.document.getElementById("lastName").focus();
                formValid = false;
            }

            else if (GeneralService.isInvalid(customer.email)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_EMAIL');
                $window.document.getElementById("email").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.pwd) && $scope.action == "add") {
                $scope.error.message = $translate.instant('ERR_REGISTER_PASSWORD');
                $window.document.getElementById("pwd").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.cPwd) && $scope.action == "add") {
                $scope.error.message = $translate.instant('ERR_REGISTER_REPASSWORD');
                $window.document.getElementById("cPwd").focus();
                formValid = false;
            }
            else if (customer.pwd != customer.cPwd && $scope.action == "add") {
                $scope.error.message = $translate.instant('ERR_REGISTER_DONTMATCH');
                customer.pwd = "";
                customer.cPwd = "";
                $window.document.getElementById("pwd").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.phonePrimary)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("phonePrimary").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.country)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("country").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.state)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_STATE');
                $window.document.getElementById("state").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.city)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("city").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.address)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("address").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(customer.zipCode)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_ZIPCODE');
                $window.document.getElementById("zipCode").focus();
                formValid = false;
            }

            return formValid;
        }

        $scope.goToNextStep = function () {
            var formValid = true;


            if ($scope.step == 1) {
                formValid = validateCustomer($scope.newCustomer);

            }
            else if ($scope.step == 2) {
                $scope.error.message = "";
                if (GeneralService.isInvalid($scope.newHouse.contactFirstName)) {
                    $scope.error.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
                    $window.document.getElementById("contactFirstName").focus();
                    formValid = false;
                }
                else if (GeneralService.isInvalid($scope.newHouse.contactLastName)) {
                    $scope.error.message = $translate.instant('ERR_REGISTER_LASTNAME');
                    $window.document.getElementById("contactLastName").focus();
                    formValid = false;
                }

                else if (GeneralService.isInvalid($scope.newHouse.contactPhonePrimary)) {
                    $scope.error.message = $translate.instant('ERR_REGISTER_PHONE');
                    $window.document.getElementById("contactPhonePrimary").focus();
                    formValid = false;
                }
                else if (GeneralService.isInvalid($scope.newHouse.country)) {
                    $scope.error.message = $translate.instant('ERR_REGISTER_COUNTRY');
                    $window.document.getElementById("houseCountry").focus();
                    formValid = false;
                }
                else if (GeneralService.isInvalid($scope.newHouse.state)) {
                    $scope.error.message = $translate.instant('ERR_REGISTER_STATE');
                    $window.document.getElementById("houseState").focus();
                    formValid = false;
                }
                else if (GeneralService.isInvalid($scope.newHouse.city)) {
                    $scope.error.message = $translate.instant('ERR_REGISTER_CITY');
                    $window.document.getElementById("houseCity").focus();
                    formValid = false;
                }
                else if (GeneralService.isInvalid($scope.newHouse.address)) {
                    $scope.error.message = $translate.instant('ERR_REGISTER_ADDRESS');
                    $window.document.getElementById("houseAddress").focus();
                    formValid = false;
                }
                else if (GeneralService.isInvalid($scope.newHouse.zipCode)) {
                    $scope.error.message = $translate.instant('ERR_REGISTER_ZIPCODE');
                    $window.document.getElementById("houseZipCode").focus();
                    formValid = false;
                }
                else if (GeneralService.isInvalid($scope.newHouse.planId)) {
                    $scope.error.message = $translate.instant('ERR_DASHBOARD_PLAN');
                    $window.document.getElementById("housePlanId").focus();
                    formValid = false;
                }

            }

            if (formValid) {
                $scope.step += 1;
            }


        }

        $scope.goToPreviousStep = function () {
            $scope.step -= 1;
        }


        $scope.getPlanPrice = function () {
            DashboardService.getPlanPrice($scope.newHouse.country, $scope.newHouse.planId)
                .then(function (response) {

                    $scope.newHouse.amount = response.data.price;
                    $scope.newHouse.currency = response.data.currency;

                    $scope.paymentInfo.planName = response.data.planName;
                    $scope.paymentInfo.amount = response.data.price;

                }, function (error) {
                    console.log(error);
                })
        }

        $scope.addRecurringPayments = function () {

            $scope.paymentInfo.error = "";

            if (GeneralService.isInvalid($scope.paymentInfo.nameOnCard)) {
                $scope.paymentInfo.error = $translate.instant('ERR_DASHBOARD_NAMEONCARD');
                $window.document.getElementById("nameOnCard").focus();
            }
            else if (GeneralService.isInvalid($scope.paymentInfo.cardType)) {
                $scope.paymentInfo.error = $translate.instant('ERR_DASHBOARD_CARDTYPE');
                $window.document.getElementById("cardType").focus();
            }
            else if (GeneralService.isInvalid($scope.paymentInfo.cardNumber)) {
                $scope.paymentInfo.error = $translate.instant('ERR_DASHBOARD_CARDNUMBER');
                $window.document.getElementById("cardNumber").focus();
            }

            else if (GeneralService.isInvalid($scope.paymentInfo.cvv)) {
                $scope.paymentInfo.error = $translate.instant('ERR_DASHBOARD_CVV');
                $window.document.getElementById("cvv").focus();
            }
            else if (GeneralService.isInvalid($scope.paymentInfo.expMonth)) {
                $scope.paymentInfo.error = $translate.instant('ERR_DASHBOARD_EXPMONTH');
                $window.document.getElementById("expMonth").focus();
            }
            else if (GeneralService.isInvalid($scope.paymentInfo.expYear)) {
                $scope.paymentInfo.error = $translate.instant('ERR_DASHBOARD_EXPYEAR');
                $window.document.getElementById("expYear").focus();
            }

            else {
                $scope.paymentInfo.error = "";

                AdminService.createCustomer($scope.newCustomer)
                    .then(function (response) {
                        console.log(response.data);


                        $scope.paymentInfo.customerId = response.data.id;
                        $scope.paymentInfo.country = $scope.newHouse.country;
                        $scope.paymentInfo.state = $scope.newHouse.state;
                        $scope.paymentInfo.city = $scope.newHouse.city;
                        $scope.paymentInfo.address = $scope.newHouse.address;
                        $scope.paymentInfo.zipCode = $scope.newHouse.zipCode;

                        $scope.paymentInfo.cFirstName = $scope.newHouse.contactFirstName;
                        $scope.paymentInfo.cLastName = $scope.newHouse.contactLastName;
                        $scope.paymentInfo.cPhonePrimary = $scope.newHouse.contactPhonePrimary;
                        $scope.paymentInfo.cPhoneAlternate = $scope.newHouse.contactPhoneAlternate;


                        DashboardService.addRecurringPayments($scope.paymentInfo)
                            .then(function (response) {
                                console.log(response);
                                var result = response.data;

                                if (result.errorCode != 0) //TRANSACTION FAILED
                                {
                                    $scope.paymentInfo.error = $translate.instant(result.errorName);
                                }
                                else {
                                    $('#frm_newCustomer').attr('action', RouterService.getEndPoint() + '/admin/customers');
                                    $('#frm_newCustomer').submit();
                                }


                            }, function (error) {
                                console.log(error);
                            })


                    }, function (error) {

                    })

                /*
                 */
            }

        }

        $scope.setRequestOpen = function (id) {
            AdminService.setRequestOpen(id)
                .then(function (response) {
                    //console.log(response);
                }, function (error) {
                    console.log(error);
                })
        }

        $scope.getRequest = function(request)
        {
            $scope.request = request;
            $scope.proforma.requestId = request.requestId;
            //console.log(request);
        }

        $scope.attachProforma = function () {

            $scope.error.message = "";

            if (GeneralService.isInvalid($scope.proforma.amount))
            {
                $scope.error.message =  $translate.instant('ERR_AMOUNT_INVALID');
                $window.document.getElementById("amount").focus();
            }
            else if(GeneralService.isInvalid($("#filename").val()))
            {
                $scope.error.message =  $translate.instant('ERR_FILE_INVALID');
                $window.document.getElementById("filename").focus();
            }
            else
            {
                if(GeneralService.isInvalid($scope.proforma.tax))
                {
                    $scope.proforma.tax = "0.00";

                }

                $("#requestId").val($scope.proforma.requestId);

                $("#frm_attachProforma").submit();
            }
        }

        //End controller
    })
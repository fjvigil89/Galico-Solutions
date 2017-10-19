/**
 * Created by jrhod on 2017-09-26.
 */
angular.module("gpApp")
    .controller('SettingsController', function ($scope, $rootScope, DashboardService, AdminService, RouterService, $window, GeneralService, $translate) {

        $scope.error = {};
        $scope.action = "";
        $scope.agent = {};



        $scope.addNewAgence = function () {
            if (GeneralService.isInvalid($scope.newAgence.country)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("countryAgence").focus();
            }
            else if (GeneralService.isInvalid($scope.newAgence.city)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("cityAgence").focus();
            }

            else if (GeneralService.isInvalid($scope.newAgence.phone)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("phoneAgence").focus();
            }
            else if (GeneralService.isInvalid($scope.newAgence.address)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("adresseAgence").focus();
            }

            else {
                $('#frm_newAgence').submit();
            }


        }


        $scope.addNewPrice = function () {
            if (GeneralService.isInvalid($scope.newPrice.country)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("PriceCountry").focus();
            }
            else if (GeneralService.isInvalid($scope.newPrice.price)) {
                $scope.error.message = $translate.instant('ERR_SETTING_PRICE');
                $window.document.getElementById("price").focus();
            }

            else if (GeneralService.isInvalid($scope.newPrice.tax)) {
                $scope.error.message = $translate.instant('ERR_SETTING_TAX');
                $window.document.getElementById("tax").focus();
            }
            else if (GeneralService.isInvalid($scope.newPrice.plan)) {
                $scope.error.message = $translate.instant('ERR_DASHBOARD_PLAN');
                $window.document.getElementById("plan").focus();
            }


            else {
                $('#frm_newPrice').submit();
            }


        }


        $scope.updateAgent = function () {
            $scope.action = "update";
            if (validateAgent($scope.agent)) {
                $('#frm_update_agent').submit();
            }
        }

        function validateAgent(agent) {
            var formValid = true;
            if (GeneralService.isInvalid(agent.country)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("subagCountry").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(agent.city)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("cityAgence").focus();
                formValid = false;
            }

            else if (GeneralService.isInvalid(agent.phone)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("phoneAgence").focus();
                formValid = false;
            }


            else if (GeneralService.isInvalid(agent.address)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("adresseAgence").focus();
                formValid = false;
            }


            return formValid;
        }

        $scope.getAgentInformation = function (agentId) {


            AdminService.getAgentInformation(agentId)
                .then(function (response) {
                    console.log(response.data);
                    $scope.agent = response.data;


                }, function (error) {

                })

        }

        $scope.getPriceInformation = function (priceId) {


            AdminService.getPriceInformation(priceId)
                .then(function (response) {
                    console.log(response.data);
                    $scope.price = response.data;


                }, function (error) {

                })

        }


        $scope.updatePrice = function () {
            $scope.action = "update";
            if (validatePrice($scope.price)) {
                $('#frm_update_price').submit();
            }
        }

        function validatePrice(price) {
            var formValid = true;
            if (GeneralService.isInvalid(price.price)) {
                $scope.error.message = $translate.instant('ERR_SETTING_PRICE');
                $window.document.getElementById("pricePrice").focus();
                formValid = false;
            }
            else if (GeneralService.isInvalid(price.taxpercentage)) {
                $scope.error.message = $translate.instant('ERR_SETTING_TAX');
                $window.document.getElementById("priceTax").focus();
                formValid = false;
            }

            else if (GeneralService.isInvalid(price.plan)) {
                $scope.error.message = $translate.instant('ERR_DASHBOARD_PLAN');
                $window.document.getElementById("pricePlan").focus();
                formValid = false;
            }


            else if (GeneralService.isInvalid(price.country)) {
                $scope.error.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("priceCountry").focus();
                formValid = false;
            }


            return formValid;
        }

    })
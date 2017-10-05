/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('AdminController', function ($scope, $rootScope, DashboardService, AdminService, RouterService, $window, GeneralService, $translate) {

        $('body').on('hidden.bs.modal', function (e) {
            if ($('.modal').hasClass('in')) {
                $('body').addClass('modal-open');
            }
        });
        $scope.nombre = "hola";
        $scope.houses = {};
        $scope.customer = {};

        $scope.auth = {};
        $scope.auth.message = "";
        $scope.newCustomer = "";
        $scope.newAgence = "";
        $scope.newPrice = "";
        $scope.request = {};
        $scope.request.error = "";

        $scope.admin = {};


        $scope.getHousesInformation = function (customerId) {
            DashboardService.getHousesInformation(customerId)
                .then(function (response) {
                    console.log(response.data);
                    $scope.houses = response.data;

                }, function (error) {

                })
        }

        $scope.getSelectedHouseInfo = function (houseId) {
            var house = $.grep($scope.houses, function (h) {
                return h.id == houseId;
            });
            if (house.length > 0) {
                $scope.selectedHouse = house[0];

            }
        }


        $scope.addNewAgence = function () {
            if (GeneralService.isInvalid($scope.newAgence.country)) {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("countryAgence").focus();
            }
            else if (GeneralService.isInvalid($scope.newAgence.city)) {
                $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("cityAgence").focus();
            }

            else if (GeneralService.isInvalid($scope.newAgence.phone)) {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("phoneAgence").focus();
            }
            else if (GeneralService.isInvalid($scope.newAgence.address)) {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("adresseAgence").focus();
            }

            else {
                $('#frm_newAgence').submit();
            }


        }


        $scope.addNewPrice = function () {
            if (GeneralService.isInvalid($scope.newPrice.country)) {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("PriceCountry").focus();
            }
            else if (GeneralService.isInvalid($scope.newPrice.price)) {
                $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("price").focus();
            }

            else if (GeneralService.isInvalid($scope.newPrice.tax)) {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("tax").focus();
            }
            else if (GeneralService.isInvalid($scope.newPrice.plan)) {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("plan").focus();
            }


            else {
                $('#frm_newPrice').submit();
            }


        }


        $scope.sendProforma = function () {

            $scope.request.error = "";

            if (GeneralService.isInvalid($scope.request.email)) {
                $scope.update.error = $translate.instant('ERR_SERVICE_INVALID');
                $window.document.getElementById("email").focus();
            }
            else if (GeneralService.isInvalid($scope.request.subject)) {
                $scope.update.error = $translate.instant('ERR_REQUEST_DETAILS_INVALID');
                $window.document.getElementById("subject").focus();
            }
            else if (GeneralService.isInvalid($scope.request.content)) {
                $scope.update.error = $translate.instant('ERR_REQUEST_DETAILS_INVALID');
                $window.document.getElementById("content").focus();
            }
            else {

                $('#frm_send_proforma').submit();
            }
        }


        $scope.getEmail = function () {

            $scope.request.email = "hola";

        }

        $scope.authenticate = function () {
            if (GeneralService.isInvalid($scope.admin.email)) {
                $scope.auth.message = $translate.instant('ERR_SIGNIN_EMAIL');
                $window.document.getElementById("email").focus();
            }
            else if (GeneralService.isInvalid($scope.admin.pwd)) {
                $scope.auth.message = $translate.instant('ERR_SIGNIN_PASSWORD');
                $window.document.getElementById("pwd").focus();
            }
            else {
                $scope.admin.authadmUrl = $('#frm_signinadmin').attr('action');
                AdminService.authenticate($scope.admin)
                    .then(function (response) {
                        console.log(response);
                        var adminId = response.data.adminId;
                        if (adminId > -1) {
                            $('#frm_signinadmin').attr('action', RouterService.getEndPoint() + '/admin/customers');
                            $('#frm_signinadmin').submit();
                        }
                        else {
                            $scope.auth.message = $translate.instant('ERR_SIGNIN_FAILED');
                        }


                    }, function (error) {
                        console.log(error);
                    })
            }

        }

        //$scope.getCustomerInformation();
        //$scope.getHousesInformation();

    })
/**
 * Created by jrhod on 2017-09-26.
 */
angular.module("gpApp")
    .controller('TechnicianController',function($scope, $rootScope, DashboardService,  AdminService, RouterService, $window, GeneralService, $translate){

        $scope.technician = {};
        $scope.technicianUpdated = {};

        $scope.getTechnicianInformation = function(technicianId)
        {
            AdminService.getTechnicianInformation(technicianId)
                .then(function(response){
                    console.log(response.data);
                    $scope.technicianUpdated = response.data;

                }, function (error) {

                })
        }

        $scope.addTechnician = function ()
        {
            if(GeneralService.isInvalid($scope.technician.firstName))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
                $window.document.getElementById("newTechFirstname").focus();
            }
            else if(GeneralService.isInvalid($scope.technician.lastName))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_LASTNAME');
                $window.document.getElementById("newTechLastname").focus();
            }

            else if(GeneralService.isInvalid($scope.technician.email))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_EMAIL');
                $window.document.getElementById("newTechEmail").focus();
            }

            else if(GeneralService.isInvalid($scope.technician.phonePrimary))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("newTechPhonePrimary").focus();
            }

            else if(GeneralService.isInvalid($scope.technician.profession))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("newTechProfesion").focus();
            }
            else if(GeneralService.isInvalid($scope.technician.idType))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("newTechIDType").focus();
            }
            else if(GeneralService.isInvalid($scope.technician.code))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("newTechCode").focus();
            }

            else if(GeneralService.isInvalid($scope.technician.country))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("newTechCountry").focus();
            }
            else if(GeneralService.isInvalid($scope.technician.state))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_STATE');
                $window.document.getElementById("newTechState").focus();
            }
            else if(GeneralService.isInvalid($scope.technician.city))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("addTechCity").focus();
            }

            else if(GeneralService.isInvalid($scope.technician.address))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("newTechAddress").focus();
            }
            else if(GeneralService.isInvalid($scope.technician.zipCode))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ZIPCODE');
                $window.document.getElementById("newTechZipCode").focus();
            }

            else
            {
                $('#frm_newTechnician').submit();
            }

        }

        $scope.updateTechnician = function () {


            if(GeneralService.isInvalid($scope.technicianUpdated.lastName))
            {
                $scope.auth.message  = $translate.instant('ERR_REGISTER_LASTNAME');
                $window.document.getElementById("edit-tech-lastName").focus();

            }
            else if(GeneralService.isInvalid($scope.technicianUpdated.firstName))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
                $window.document.getElementById("edit-tech-firstName").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.email))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_EMAIL');
                $window.document.getElementById("edit-tech-email").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.phonePrimary))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("edit-tech-phonePrimary").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.profession))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("edit-tech-profession").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.country))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("edit-tech-country").focus();
            }
            else if(GeneralService.isInvalid($scope.technicianUpdated.state))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_STATE');
                $window.document.getElementById("edit-tech-state").focus();
            }
            else if(GeneralService.isInvalid($scope.technicianUpdated.city))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("edit-tech-city").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.address))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("edit-tech-address").focus();
            }
            else if(GeneralService.isInvalid($scope.technicianUpdated.zipCode))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ZIPCODE');
                $window.document.getElementById("edit-tech-zipCode").focus();
            }

            else
            {

                AdminService.updateTechnician($scope.technicianUpdated)
                    .then(function(response){
                        console.log(response.data);
                        $scope.technicianUpdated = response.data;

                    },function(error){

                    })
            }

        }

        //End : controller
    })
/**
 * Created by ANTONIO on 2017-08-09.
 */


angular.module("gpApp")
    .controller('WorkUsController',function($scope,$rootScope,GeneralService,ContactService,$window,$translate){

        $scope.sender = {};
        $scope.message = {};
        $scope.message.error = "";
        $scope.message.successful = false;


        $scope.sendform = function()
        {
            $scope.message.error = "";
            $scope.message.successful = false;

            if(GeneralService.isInvalid($scope.sender.cnamework))
            {
                $scope.message.error = $translate.instant('ERR_CONTACTUS_NAME');
                $window.document.getElementById("cnamework").focus();
            }
            else if(GeneralService.isInvalid($scope.sender.phonework))
            {
                $scope.message.error = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("phonework").focus();
            }
            else if(GeneralService.isInvalid($scope.sender.emailwork))
            {
                $scope.message.error = $translate.instant('ERR_CONTACTUS_MAIL');
                $window.document.getElementById("emailwork").focus();
            }


            else if(GeneralService.isInvalid($scope.sender.messagework))
            {
                $scope.message.error = $translate.instant('ERR_CONTACTUS_MESSAGE');
                $window.document.getElementById("messagework").focus();
            }


            else
            {
                $('#frm_work_us').submit();

            }
        }

    })
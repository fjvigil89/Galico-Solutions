/**
 * Created by ANTONIO on 2017-05-23.
 */

angular.module("gpApp")
    .controller('ContactUsController',function($scope,$rootScope,authService,GeneralService,$window){

        $scope.sender = {};
        $scope.sender.cname ="";
        $scope.sender.phone ="";
        $scope.sender.email ="";
        $scope.sender.message ="";
        $scope.auth = {};
        $scope.auth.message = "";


        $scope.send = function()
        {
            if(GeneralService.isInvalid($scope.sender.cname))
            {
                $scope.auth.message = "Please enter your Name";
                $window.document.getElementById("cname").focus();
            }
            else if(GeneralService.isInvalid($scope.sender.email))
            {
                $scope.auth.message = "Please enter your email";
                $window.document.getElementById("email").focus();
            }

            else if(GeneralService.isInvalid($scope.sender.message))
            {
                $scope.auth.message = "Please enter your message";
                $window.document.getElementById("message").focus();
            }


            else
            {
                $('#frm_contact_us').submit();
            }
        }

    })
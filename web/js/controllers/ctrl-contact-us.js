/**
 * Created by ANTONIO on 2017-05-23.
 */

angular.module("gpApp")
    .controller('ContactUsController',function($scope,$rootScope,authService,GeneralService,ContactService,$window){

        $scope.sender = {};
        $scope.sender.cname ="";
        $scope.sender.phone ="";
        $scope.sender.email ="";
        $scope.sender.message ="";
        $scope.message = {};
        $scope.message.error = "";
        $scope.message.successful = false;


        $scope.send = function()
        {
            $scope.message.error = "";
            $scope.message.successful = false;

            if(GeneralService.isInvalid($scope.sender.cname))
            {
                $scope.message.error = "Please enter your name";
                $window.document.getElementById("cname").focus();
            }
            else if(GeneralService.isInvalid($scope.sender.email))
            {
                $scope.message.error = "Please enter your email";
                $window.document.getElementById("email").focus();
            }

            else if(GeneralService.isInvalid($scope.sender.message))
            {
                $scope.message.error = "Please enter your message";
                $window.document.getElementById("message").focus();
            }


            else
            {
                //$('#frm_contact_us').submit();
                ContactService.sendMessage($scope.sender)
                    .then(function(response){
                        console.log(response.data);
                        if(response.data.sendStatus==1)
                        {
                            $scope.message.successful = true;
                            $scope.sender.message = "";
                        }
                        else
                        {
                            $scope.message.error = "The message could not be sent. Please try again";
                        }
                    },function (error) {
                        $scope.message.error = "The message could not be sent. Please try again";
                    })
            }
        }

    })
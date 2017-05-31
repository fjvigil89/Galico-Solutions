/**
 * Created by jrhod on 2017-05-15.
 */
angular.module("gpApp")
    .controller('UserController',function($scope,$rootScope,authService,GeneralService,RouterService,$window){
        $scope.user = {};
        $scope.user.email = "";
        $scope.user.pwd = "";
        $scope.auth = {};
        $scope.auth.message = "";
        $scope.user.firstName = "";
        $scope.user.lastName = "";
        $scope.user.cPwd = "";
        $scope.user.phonePrimary = "";
        $scope.user.phoneAlternate = "";
        $scope.user.country = "";
        $scope.user.state = "";
        $scope.user.city = "";
        $scope.user.address = "";
        $scope.user.zipCode = "";



        $scope.authenticate = function()
        {
            if(GeneralService.isInvalid($scope.user.email))
            {
                $scope.auth.message = "Please enter a valid email";
                $window.document.getElementById("email").focus();
            }
            else if(GeneralService.isInvalid($scope.user.pwd))
            {
                $scope.auth.message = "Please enter a password";
                $window.document.getElementById("pwd").focus();
            }
            else
            {
                $scope.user.authUrl = $('#frm_signin').attr('action');
                authService.authenticate($scope.user)
                    .then(function(response){
                        console.log(response.data.userId);
                        var userId = response.data.userId;
                        if(userId>-1)
                        {
                            $('#frm_signin').attr('action', RouterService.getEndPoint()+'/my-dashboard/'+userId);
                            $('#frm_signin').submit();
                        }
                        else
                        {
                            $scope.auth.message = "Your email or password is incorrect. Please try again.";
                        }


                    },function(error){
                        console.log(error);
                    })
            }

        }

        $scope.register = function()
        {
            if(GeneralService.isInvalid($scope.user.firstName))
            {
                $scope.auth.message = "Please enter your first name";
                $window.document.getElementById("firstName").focus();
            }
            else if(GeneralService.isInvalid($scope.user.lastName))
            {
                $scope.auth.message = "Please enter your last name";
                $window.document.getElementById("lastName").focus();
            }

            else if(GeneralService.isInvalid($scope.user.email))
            {
                $scope.auth.message = "Please enter a valid email";
                $window.document.getElementById("email").focus();
            }
            else if(GeneralService.isInvalid($scope.user.pwd))
            {
                $scope.auth.message = "Please enter a password";
                $window.document.getElementById("pwd").focus();
            }

            else if(GeneralService.isInvalid($scope.user.cPwd))
            {
                $scope.auth.message = "Please confirm your password";
                $window.document.getElementById("cPwd").focus();
            }
            else if($scope.user.pwd!=$scope.user.cPwd)
            {
                $scope.auth.message = "Your passwords don't match";
                $scope.user.pwd = "";
                $scope.user.cPwd = "";
                $window.document.getElementById("pwd").focus();
            }
            else if(GeneralService.isInvalid($scope.user.phonePrimary))
            {
                $scope.auth.message = "Please enter a phone number";
                $window.document.getElementById("phonePrimary").focus();
            }

            else if(GeneralService.isInvalid($scope.user.country))
            {
                $scope.auth.message = "Please enter a country";
                $window.document.getElementById("country").focus();
            }
            else if(GeneralService.isInvalid($scope.user.state))
            {
                $scope.auth.message = "Please enter a state";
                $window.document.getElementById("state").focus();
            }
            else if(GeneralService.isInvalid($scope.user.city))
            {
                $scope.auth.message = "Please enter a city";
                $window.document.getElementById("city").focus();
            }

            else if(GeneralService.isInvalid($scope.user.address))
            {
                $scope.auth.message = "Please enter a address";
                $window.document.getElementById("address").focus();
            }
            else if(GeneralService.isInvalid($scope.user.zipCode))
            {
                $scope.auth.message = "Please enter a zipCode";
                $window.document.getElementById("zipCode").focus();
            }

            else
            {
                $('#frm_register').submit();
            }
        }

        $scope.signOut = function()
        {
            $('#frm_signout').submit();
        }
    })

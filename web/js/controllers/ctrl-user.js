/**
 * Created by jrhod on 2017-05-15.
 */
angular.module("gpApp")
    .controller('UserController',function($scope,$rootScope,authService,GeneralService){
        $scope.user = {};
        $scope.user.email = "";
        $scope.user.pwd = "";
        $scope.auth = {};
        $scope.auth.message = "";


        $scope.authenticate = function()
        {
            if(GeneralService.isInvalid($scope.user.email))
            {
                $scope.auth.message = "Please enter a valid email";
            }
            else if(GeneralService.isInvalid($scope.user.pwd))
            {
                $scope.auth.message = "Please enter a password";
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
                            $('#frm_signin').attr('action', '/my-dashboard/'+userId);
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
            if(GeneralService.isInvalid($scope.user.email))
            {
                $scope.auth.message = "Please enter a valid email";
            }
            else if(GeneralService.isInvalid($scope.user.pwd))
            {
                $scope.auth.message = "Please enter a password";
            }



            else
            {
                $('#frm_register').submit();
            }
        }
    })

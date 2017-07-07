/**
 * Created by jrhod on 2017-05-15.
 */
angular.module("gpApp")
    .controller('UserController',function($scope,$rootScope,authService,GeneralService,RouterService,DashboardService,$window,$translate){
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

        $scope.update = {};
        $scope.update.successful = false;

        $scope.reset = {};



        // GET LANGUAGE ON LOAD
        var curLang = $("#hiddenLang").val();
        if(curLang=="")
        {
            curLang="en";
        }

        $translate.use(curLang);
		console.log(curLang);

        //--END : GET LANGUAGE ON LOAD

        $scope.authenticate = function()
        {
            if(GeneralService.isInvalid($scope.user.email))
            {
                $scope.auth.message = $translate.instant('ERR_SIGNIN_EMAIL');
                $window.document.getElementById("email").focus();
            }
            else if(GeneralService.isInvalid($scope.user.pwd))
            {
                $scope.auth.message = $translate.instant('ERR_SIGNIN_PASSWORD');
                $window.document.getElementById("pwd").focus();
            }
            else
            {
                $scope.user.authUrl = $('#frm_signin').attr('action');
                authService.authenticate($scope.user)
                    .then(function(response){
                        console.log(response);
                        var userId = response.data.userId;
                        if(userId>-1)
                        {
                            $('#frm_signin').attr('action', RouterService.getEndPoint()+'/my-dashboard/'+userId);
                            $('#frm_signin').submit();
                        }
                        else
                        {
                            $scope.auth.message = $translate.instant('ERR_SIGNIN_FAILED');
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
                $scope.auth.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
                $window.document.getElementById("firstName").focus();
            }
            else if(GeneralService.isInvalid($scope.user.lastName))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_LASTNAME');
                $window.document.getElementById("lastName").focus();
            }

            else if(GeneralService.isInvalid($scope.user.email))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_EMAIL');
                $window.document.getElementById("email").focus();
            }
            else if(GeneralService.isInvalid($scope.user.pwd))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PASSWORD');
                $window.document.getElementById("pwd").focus();
            }

            else if(GeneralService.isInvalid($scope.user.cPwd))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_REPASSWORD');
                $window.document.getElementById("cPwd").focus();
            }
            else if($scope.user.pwd!=$scope.user.cPwd)
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_DONTMATCH');
                $scope.user.pwd = "";
                $scope.user.cPwd = "";
                $window.document.getElementById("pwd").focus();
            }
            else if(GeneralService.isInvalid($scope.user.phonePrimary))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("phonePrimary").focus();
            }

            else if(GeneralService.isInvalid($scope.user.country))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("country").focus();
            }
            else if(GeneralService.isInvalid($scope.user.state))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_STATE');
                $window.document.getElementById("state").focus();
            }
            else if(GeneralService.isInvalid($scope.user.city))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("city").focus();
            }

            else if(GeneralService.isInvalid($scope.user.address))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("address").focus();
            }
            else if(GeneralService.isInvalid($scope.user.zipCode))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ZIPCODE');
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

        $scope.updatePassword = function()
        {
            $scope.update.error = "";
            $scope.update.successful = false;

            var customerId = $window.document.getElementById("customerId").value;

            if(GeneralService.isInvalid($scope.user.oldPassword))
            {
                $scope.update.error = $translate.instant('ERR_UPDATEPASSWORD_PASS');
                $window.document.getElementById('oldPassword').focus();

            }
            else if(GeneralService.isInvalid($scope.user.newPassword))
            {
                $scope.update.error = $translate.instant('ERR_UPDATEPASSWORD_REPASS');
                $window.document.getElementById('newPassword').focus();

            }
            else if(GeneralService.isInvalid($scope.user.cNewPassword))
            {
                $scope.update.error = $translate.instant('ERR_UPDATEPASSWORD_NEWPASS');
                $window.document.getElementById('cNewPassword').focus();
            }
            else if($scope.user.newPassword!=$scope.user.cNewPassword)
            {
                $scope.update.error = $translate.instant('ERR_UPDATEPASSWORD_MATCHPASS');
                $scope.user.newPassword = "";
                $scope.user.cNewPassword = "";
                $window.document.getElementById('newPassword').focus();
            }
            else
            {
                $scope.user.customerId = customerId;
                DashboardService.updatePassword( $scope.user)
                    .then(function (response) {

                        console.log(response);
                        var updateStatus = response.data.updateStatus;
                        if(updateStatus == -2)
                        {
                            $scope.update.error = $translate.instant('ERR_UPDATEPASSWORD_FAILEDPASS');

                        }
                        else if(updateStatus==1)
                        {
                            $scope.update.error = "";
                            $scope.update.successful = true;
                        }
                        else
                        {
                            $scope.update.error = $translate.instant('ERR_UPDATEPASSWORD_NOTSAVEPASS');
                        }


                    },function (error) {
                        $scope.update.error = $translate.instant('ERR_UPDATEPASSWORD_NOTSAVEPASS');
                    }).finally(function(){
                        $scope.user.oldPassword = "";
                        $scope.user.newPassword = "";
                        $scope.user.cNewPassword = "";
                });
            }
        }

        $scope.resetPassword = function()
        {
           $scope.reset.successful = false;
           $scope.reset.error = "";

            if(GeneralService.isInvalid($scope.reset.email))
            {
                $scope.reset.error = $translate.instant('ERR_SIGNIN_EMAIL');
                $window.document.getElementById('resetEmail').focus();
            }
            else
            {
				authService.resetPassword($scope.reset.email)
				.then(function(response){
					//console.log(response.data);
					if(response.data.actionStatus==1)
					{
						$scope.reset.successful = true;
						$scope.reset.email = "";
					}
					else
					{
						$scope.reset.error = $translate.instant('ERR_SIGNIN_EMAIL_NOT_FOUND');
					}
				},function(error){
					$scope.reset.error = $translate.instant('ERR_SIGNIN_RESET');
				})
            }

        }
    })

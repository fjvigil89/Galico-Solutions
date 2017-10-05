/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('CCController',function($scope,$rootScope,$window,GeneralService,$translate,CCService){


            $scope.cc = {};
            $scope.cc.nameOnCard = $("#hFullname").val();
            $scope.cc.customerId = $("#customerId").val();

            $scope.updateCC = function()
            {
                $scope.cc.error = "";
                $scope.cc.info = "";

				if(GeneralService.isInvalid($scope.cc.nameOnCard))
                {
                    $scope.cc.error = $translate.instant('ERR_DASHBOARD_NAMEONCARD');
                    $window.document.getElementById("nameOnCard").focus();
                }
                else if(GeneralService.isInvalid($scope.cc.cardNumber))
                {
                    $scope.cc.error = $translate.instant('ERR_DASHBOARD_CARDNUMBER');
                    $window.document.getElementById("cardNumber").focus();
                }
                else if(GeneralService.isInvalid($scope.cc.cvv) || ($scope.cc.cvv.length!=3 && $scope.cc.cvv.length!=4) ) //amex 4 digits
                {
                    $scope.cc.error = $translate.instant('ERR_DASHBOARD_CVV');
                    $window.document.getElementById("cvv").focus();
                }
                else if(GeneralService.isInvalid($scope.cc.expMonth))
                {
                    $scope.cc.error = $translate.instant('ERR_DASHBOARD_EXPMONTH');
                    $window.document.getElementById("expMonth").focus();
                }
                else if(GeneralService.isInvalid($scope.cc.expYear))
                {
                    $scope.cc.error = $translate.instant('ERR_DASHBOARD_EXPYEAR');
                    $window.document.getElementById("expYear").focus();
                }

                else
                {
                    CCService.updateCC($scope.cc)
                        .then(function(response){

                            console.log(response);
                            var result = response.data;

                            if(result.errorCode!=0) //TRANSACTION FAILED
                            {
                                $scope.cc.error =  $translate.instant(result.errorName);
                            }
                            else
                            {
                                $scope.cc.info = "Credit card information was updated successfully.";
                                $scope.cc.cardNumber = "";
                                $scope.cc.cvv = "";
                                $scope.cc.expMonth = "";
                                $scope.cc.expYear = "";
                            }


                        },function (error) {
                            $scope.cc.error = "Credit card information was not updated successfully. Please try again";
                        })
                }
            }


    })
	
	

/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('SendRequestController',function($scope,$rootScope,$window,GeneralService,$translate){


            $scope.request = {};

            $scope.request.error = "";


            $scope.sendRequest = function()
            {

                $scope.request.error = "";

                if(GeneralService.isInvalid($scope.request.houseId))
                {
                    $scope.request.error = $translate.instant('ERR_HOUSE_INVALID');
                    $window.document.getElementById("serviceId").focus();
                }
                else if(GeneralService.isInvalid($scope.request.serviceId))
                {
                    $scope.request.error = $translate.instant('ERR_SERVICE_INVALID');
                    $window.document.getElementById("serviceId").focus();
                }
                else if(GeneralService.isInvalid($scope.request.requestDetails))
                {
                    $scope.request.error = $translate.instant('ERR_REQUEST_DETAILS_INVALID');
                    $window.document.getElementById("requestDetails").focus();
                }

                else
                {
                    /*$("#hHouseId").val($scope.request.houseId);
                    $("#hRequestDetails").val($scope.request.requestDetails);
                    $("#hServiceId").val($scope.request.serviceId);*/

                    $('#frm_service_request').submit();
                }
            }

            $scope.getPlanPrice = function()
            {

            }


    })
	
	

/**
 * Created by jrhod on 2017-08-16.
 */
angular.module("gpApp")
    .controller('MakePaymentController',function($scope,$rootScope,$window,GeneralService,RouterService,RequestService,$translate){

		$scope.payment = {};
		
		$scope.getRequest = function(requestId,currency)
		{
			
			RequestService.findRequest(requestId)
				.then(function(response){
                    $scope.payment = response.data;
                    $scope.payment.existingCC = "0";
					$scope.payment.currency = currency;
					$scope.payment.requestId = requestId;
					$scope.payment.customerId = $("#customerId").val();

				},function(error){

				});
		}
		
		$scope.payRequestedService = function()
		{
			$scope.payment.error =  "";
			
			if(GeneralService.isInvalid($scope.payment.nameOnCard))
            {
                $scope.payment.error =  $translate.instant('ERR_DASHBOARD_NAMEONCARD');
                $window.document.getElementById("nameOnCard").focus();
            }
            
            else if(GeneralService.isInvalid($scope.payment.cardNumber))
            {
                $scope.payment.error =  $translate.instant('ERR_DASHBOARD_CARDNUMBER');
                $window.document.getElementById("cardNumber").focus();
            }

            else if(GeneralService.isInvalid($scope.payment.cvv))
            {
                $scope.payment.error =  $translate.instant('ERR_DASHBOARD_CVV');
                $window.document.getElementById("cvv").focus();
            }
            else if(GeneralService.isInvalid($scope.payment.expMonth))
            {
                $scope.payment.error =  $translate.instant('ERR_DASHBOARD_EXPMONTH');
                $window.document.getElementById("expMonth").focus();
            }
            else if(GeneralService.isInvalid($scope.payment.expYear))
            {
                $scope.payment.error =  $translate.instant('ERR_DASHBOARD_EXPYEAR');
                $window.document.getElementById("expYear").focus();
            }
			else
			{
				RequestService.payRequestedService($scope.payment)
				.then(function(response){
					var result = response.data;
					if(result.outcome=="SUCCESS") //Transaction succeeded
					{
						$('#frm_payment').attr('action', RouterService.getEndPoint()+'/viewPayments/'+$scope.payment.customerId);
                        $('#frm_payment').submit();
					}
					else
					{
						$scope.payment.error = $translate.instant(result.errorName);
					}
				},function(error){
					
				})
			}
			
		}


    })
	
	

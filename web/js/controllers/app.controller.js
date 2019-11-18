angular.module("gpApp")
    .controller('AppController',function($scope,$rootScope){
		$scope.flag = "flag_USA.png";
	
		$scope.changeFlag = function(flag)
		{
			$scope.flag = flag;
		}

    })
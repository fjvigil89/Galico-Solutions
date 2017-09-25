/**
 * Created by ANTONIO on 2017-05-23.
 */

angular.module("gpApp")
    .controller('PageNavigationController',function($scope,$rootScope,AuthService,GeneralService,$window){

        $scope.plan = {};
        $scope.plan.name = $("#allPlans").val();
        $scope.plan.text ="";

        $scope.setPlanInfo = function(plan)
        {
            if(plan=='basic')
            {
                $scope.plan.name = "GP Basic";
                $scope.plan.text = $("#GPBasic").val();
            }
            else if(plan=='plus')
            {
                $scope.plan.name = "GP Plus";
                $scope.plan.text = $("#GPPlus").val();
            }
            else if(plan=='add')
            {
                $scope.plan.name = "GP ADD";
                $scope.plan.text = $("#GPAdd").val();
            }
        }
    })
/**
 * Created by jrhod on 2017-08-11.
 */
angular.module("gpApp")
    .controller('ChangePlanController',function($scope,$rootScope,$window,GeneralService,DashboardService,PlanService,$translate){
        $scope.plan = [];
        $scope.customerId = $("#customerId").val();
        $scope.previousPlanId = "";


        var getCustomerHouses = function () {
            DashboardService.getHousesInformation($scope.customerId)
                .then(function (response) {
                    $scope.houses = response.data;

                },function (error) {

                })
        }

        var getPlans = function () {

            PlanService.getPlans()
                .then(function (response) {
                    $scope.plans = response.data;

                },function (error) {
                    console.log(error);
                })
        }

        $scope.planChanged = function(house)
        {
           DashboardService.getPlanPrice(house.countryISO,house.planId)
               .then(function(response){
                   $scope.newPrice = response.data.price + " " + response.data.currency;
                   $("#changePlanModal").modal();
               },function(error){

               })


        }
        $scope.planClicked = function(house)
        {
            if($scope.previousPlanId =="")
            {
                $scope.previousPlanId = house.planId;
                $scope.currentHouse = house;
                console.log($scope.previousPlanId);
            }
        }

        $scope.cancelChange = function()
        {
            $scope.currentHouse.planId = $scope.previousPlanId;
            $scope.previousPlanId = "";
        }

        $scope.saveChange = function()
        {
            var planInfo = {};
            planInfo.customerId = $scope.customerId;
            planInfo.houseId = $scope.currentHouse.id;
            planInfo.planId = $scope.currentHouse.planId;
            planInfo.countryISO3 = $scope.currentHouse.countryISO;

            PlanService.saveChangePlan(planInfo)
                .then(function(response){
                    console.log(response);
                },function (error) {
                    console.error(error);

                })

            $scope.previousPlanId = "";
        }



        //CALL METHOD ON STARTUP
        getPlans();
        getCustomerHouses();


    })
	
	

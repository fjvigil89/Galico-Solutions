/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('AdminController',function($scope,$rootScope,DashboardService,AdminService,$window,GeneralService,$translate){

            $('body').on('hidden.bs.modal', function (e) {
            if($('.modal').hasClass('in')) {
                $('body').addClass('modal-open');
            }
            });
        $scope.nombre = "hola";
        $scope.houses = {};
        $scope.customer = {};
        $scope.technician = {};
        $scope.getCustomerInformation = function(customerId)
        {
            //if($scope.customer.length===undefined)
            {
                DashboardService.getCustomerInformation(customerId)
                    .then(function(response){
                        console.log(response);
                        $scope.customer = response.data;
                        $scope.customer.fullName = $scope.customer.firstName + " " + $scope.customer.lastName;


                    },function(error){

                    })
            }
        }

        $scope.getHousesInformation = function(customerId) {
          DashboardService.getHousesInformation(customerId)
                .then(function(response){
                    console.log(response.data);
                    $scope.houses = response.data;

                },function(error){

                })
        }

        $scope.getSelectedHouseInfo = function(houseId)
        {
            var house = $.grep($scope.houses, function (h) { return h.id == houseId; });
            if(house.length>0)
            {
                $scope.selectedHouse = house[0];

            }
        }


        $scope.getTechnicianInformation = function(customerId)

        {
            AdminService.getTechnicianInformation(customerId)
                .then(function(response){
                    console.log(response.data);
                    $scope.technician = response.data;

                }, function (error) {

                })

        }





        $scope.getCustomerInformation();
        $scope.getHousesInformation();

    })
	
	

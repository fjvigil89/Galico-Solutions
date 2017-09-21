/**
 * Created by jrhod on 2017-05-17.
 */
angular.module("gpApp")
    .controller('AdminController',function($scope,$rootScope,DashboardService,AdminService,AuthAdmService,RouterService,$window,GeneralService,$translate){

            $('body').on('hidden.bs.modal', function (e) {
            if($('.modal').hasClass('in')) {
                $('body').addClass('modal-open');
            }
            });
        $scope.nombre = "hola";
        $scope.houses = {};
        $scope.customer = {};
        $scope.technician = {};
        $scope.auth = {};
        $scope.auth.message = "";
        $scope.newCustomer = "";
        $scope.newAgence = "";
        $scope.newPrice = "";
        $scope.request = {};
        $scope.request.error = "";
        $scope.technicianUpdated = {};
        $scope.admin = {};


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
                    $scope.technicianUpdated = response.data;

                }, function (error) {

                })

        }


$scope.addNewCustomer = function()

{
    if(GeneralService.isInvalid($scope.newCustomer.firstName))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
        $window.document.getElementById("firstName").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.lastName))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_LASTNAME');
        $window.document.getElementById("lastName").focus();
    }

    else if(GeneralService.isInvalid($scope.newCustomer.email))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_EMAIL');
        $window.document.getElementById("email").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.pwd))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_PASSWORD');
        $window.document.getElementById("pwd").focus();
    }

    else if(GeneralService.isInvalid($scope.newCustomer.cPwd))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_REPASSWORD');
        $window.document.getElementById("cPwd").focus();
    }
    else if($scope.newCustomer.pwd!=$scope.newCustomer.cPwd)
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_DONTMATCH');
        $scope.user.pwd = "";
        $scope.user.cPwd = "";
        $window.document.getElementById("pwd").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.phonePrimary))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
        $window.document.getElementById("phonePrimary").focus();
    }

    else if(GeneralService.isInvalid($scope.newCustomer.country))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
        $window.document.getElementById("country").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.state))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_STATE');
        $window.document.getElementById("state").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.city))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
        $window.document.getElementById("city").focus();
    }

    else if(GeneralService.isInvalid($scope.newCustomer.address))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
        $window.document.getElementById("address").focus();
    }
    else if(GeneralService.isInvalid($scope.newCustomer.zipCode))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_ZIPCODE');
        $window.document.getElementById("zipCode").focus();
    }

    else
    {
        $('#frm_newCustomer').submit();
    }


}

$scope.addtechnician = function () {


    if(GeneralService.isInvalid($scope.technician.firstName))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
        $window.document.getElementById("newTechFirstname").focus();
    }
    else if(GeneralService.isInvalid($scope.technician.lastName))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_LASTNAME');
        $window.document.getElementById("newTechLastname").focus();
    }

    else if(GeneralService.isInvalid($scope.technician.email))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_EMAIL');
        $window.document.getElementById("newTechEmail").focus();
    }

    else if(GeneralService.isInvalid($scope.technician.phonePrimary))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
        $window.document.getElementById("newTechPhonePrimary").focus();
    }

    else if(GeneralService.isInvalid($scope.technician.profession))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
        $window.document.getElementById("newTechProfesion").focus();
    }
    else if(GeneralService.isInvalid($scope.technician.idType))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
        $window.document.getElementById("newTechIDType").focus();
    }
    else if(GeneralService.isInvalid($scope.technician.code))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
        $window.document.getElementById("newTechCode").focus();
    }

    else if(GeneralService.isInvalid($scope.technician.country))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
        $window.document.getElementById("newTechCountry").focus();
    }
    else if(GeneralService.isInvalid($scope.technician.state))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_STATE');
        $window.document.getElementById("newTechState").focus();
    }
    else if(GeneralService.isInvalid($scope.technician.city))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
        $window.document.getElementById("addTechCity").focus();
    }

    else if(GeneralService.isInvalid($scope.technician.address))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
        $window.document.getElementById("newTechAddress").focus();
    }
    else if(GeneralService.isInvalid($scope.technician.zipCode))
    {
        $scope.auth.message = $translate.instant('ERR_REGISTER_ZIPCODE');
        $window.document.getElementById("newTechZipCode").focus();
    }

    else
    {
        $('#frm_newTechnician').submit();
    }

}


        $scope.addNewAgence = function()

        {
            if(GeneralService.isInvalid($scope.newAgence.country))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("countryAgence").focus();
            }
            else if(GeneralService.isInvalid($scope.newAgence.city))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("cityAgence").focus();
            }

            else if(GeneralService.isInvalid($scope.newAgence.phone))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("phoneAgence").focus();
            }
            else if(GeneralService.isInvalid($scope.newAgence.address))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("adresseAgence").focus();
            }

            else
            {
                $('#frm_newAgence').submit();
            }


        }



        $scope.addNewPrice = function()

        {
            if(GeneralService.isInvalid($scope.newPrice.country))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("PriceCountry").focus();
            }
            else if(GeneralService.isInvalid($scope.newPrice.price))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("price").focus();
            }

            else if(GeneralService.isInvalid($scope.newPrice.tax))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("tax").focus();
            }
            else if(GeneralService.isInvalid($scope.newPrice.plan))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("plan").focus();
            }




            else
            {
                $('#frm_newPrice').submit();
            }


        }


        $scope.sendProforma = function()
        {

            $scope.request.error = "";

            if(GeneralService.isInvalid($scope.request.email))
            {
                $scope.update.error = $translate.instant('ERR_SERVICE_INVALID');
                $window.document.getElementById("email").focus();
            }
            else if(GeneralService.isInvalid($scope.request.subject))
            {
                $scope.update.error = $translate.instant('ERR_REQUEST_DETAILS_INVALID');
                $window.document.getElementById("subject").focus();
            }
            else if(GeneralService.isInvalid($scope.request.content))
            {
                $scope.update.error = $translate.instant('ERR_REQUEST_DETAILS_INVALID');
                $window.document.getElementById("content").focus();
            }
            else
            {

                $('#frm_send_proforma').submit();
            }
        }

        $scope.updateTechnician = function () {


            if(GeneralService.isInvalid($scope.technicianUpdated.lastName))
            {
                $scope.auth.message  = $translate.instant('ERR_REGISTER_LASTNAME');
                $window.document.getElementById("edit-tech-lastName").focus();

            }
            else if(GeneralService.isInvalid($scope.technicianUpdated.firstName))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_FIRSTNAME');
                $window.document.getElementById("edit-tech-firstName").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.email))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_EMAIL');
                $window.document.getElementById("edit-tech-email").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.phonePrimary))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_PHONE');
                $window.document.getElementById("edit-tech-phonePrimary").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.profession))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("edit-tech-profession").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.country))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_COUNTRY');
                $window.document.getElementById("edit-tech-country").focus();
            }
            else if(GeneralService.isInvalid($scope.technicianUpdated.state))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_STATE');
                $window.document.getElementById("edit-tech-state").focus();
            }
            else if(GeneralService.isInvalid($scope.technicianUpdated.city))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_CITY');
                $window.document.getElementById("edit-tech-city").focus();
            }

            else if(GeneralService.isInvalid($scope.technicianUpdated.address))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ADDRESS');
                $window.document.getElementById("edit-tech-address").focus();
            }
            else if(GeneralService.isInvalid($scope.technicianUpdated.zipCode))
            {
                $scope.auth.message = $translate.instant('ERR_REGISTER_ZIPCODE');
                $window.document.getElementById("edit-tech-zipCode").focus();
            }

            else
            {

                AdminService.updateTechnician($scope.technicianUpdated)
                    .then(function(response){
                        console.log(response.data);
                        $scope.technicianUpdated = response.data;

                    },function(error){

                    })
            }

        }


        $scope.getEmail= function () {

            $scope.request.email = "hola";

        }

        $scope.authenticateAdmin = function()
        {
            if(GeneralService.isInvalid($scope.admin.email))
            {
                $scope.auth.message = $translate.instant('ERR_SIGNIN_EMAIL');
                $window.document.getElementById("email").focus();
            }
            else if(GeneralService.isInvalid($scope.admin.pwd))
            {
                $scope.auth.message = $translate.instant('ERR_SIGNIN_PASSWORD');
                $window.document.getElementById("pwd").focus();
            }
            else
            {
                $scope.admin.authadmUrl = $('#frm_signinadmin').attr('action');
                AuthAdmService.authenticateAdmin($scope.admin)
                    .then(function(response){
                        console.log(response);
                        var adminId = response.data.adminId;
                        if(adminId>-1)
                        {
                            $('#frm_signinadmin').attr('action', RouterService.getEndPoint()+'/admin/customers');
                            $('#frm_signinadmin').submit();
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

        $scope.getCustomerInformation();
        $scope.getHousesInformation();

    })
	
	

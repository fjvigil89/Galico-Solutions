angular.module("gpApp")
    .service('authService', function($http) {
        this.authenticate = function (user) {

            return $http({
                url : user.authUrl,
                method: "GET",
                params: {email: user.email, pwd : user.pwd}
            });
        }
    })

    .service('GeneralService',function(){

        this.isInvalid = function(value){
            var invalid = false;
            if(value===undefined || value.length==0)
            {
                invalid = true;
            }

            return invalid;
        }
    })

    .service('DashboardService',function($http,RouterService){
        this.getCustomerInformation = function(id)
        {
            return $http({
                url : RouterService.getEndPoint() + '/customer-information/'+id,
                method: "GET",
                /*params: {email: user.email, pwd : user.pwd}*/
            });
        }

        this.getHousesInformation = function(id)
        {
            return $http({
                url : RouterService.getEndPoint() + '/houses-informations/'+id,
                method: "GET",

            });
        }

        this.getPaymentsHistory = function(houseId)
        {
            return $http({
                url : RouterService.getEndPoint() + '/payments-history/'+houseId,
                method: "GET",

            });
        }

        this.updateCustomer = function (customer) {

            //return $http.post('/update-customer',{customerId : customer.customerId,email: customer.email});
            return $http({
                url : RouterService.getEndPoint() + '/update-customer',
                method: "GET",
                params:
                    {
                        customerId : customer.customerId,lastName : customer.lastName,
                        firstName : customer.firstName,email: customer.email,
                        phonePrimary : customer.phonePrimary, phoneAlternate : customer.phoneAlternate,
                        country : customer.country, state : customer.state, city : customer.city,
                        address : customer.address, zipCode : customer.zipCode
                    }
            });
        }
    })


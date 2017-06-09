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

    .service('ContactService',function($http,RouterService){

        this.sendMessage = function(msg){
            return $http({
                url : RouterService.getEndPoint() + '/send-email',
                method: "GET",
                params:
                    {
                        cname : msg.cname,
                        phone : msg.phone,
                        email : msg.email,
                        message : msg.message
                    }
            });
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

        this.getHouseRequests = function(houseId)
        {
            return $http({
                url : RouterService.getEndPoint() + '/house-requests/'+houseId,
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

        this.updatePassword = function (customer) {

            return $http({
                url : RouterService.getEndPoint() + '/update-password',
                method: "GET",
                params:
                    {
                        customerId : customer.customerId,
                        oldPassword : customer.oldPassword,
                        newPassword : customer.newPassword,
                        cNewPassword : customer.cNewPassword
                    }
            });
        }

        this.subscribeHouse = function (subscription) {

            return $http({
                url : RouterService.getEndPoint() + '/subscribe-house',
                method: "GET",
                params:
                    {
                        customerId : subscription.customerId,
                        planId : subscription.planId,
                        firstName : subscription.firstName,
                        lastName : subscription.lastName,
                        phonePrimary : subscription.phonePrimary,
                        phoneAlternate : subscription.phoneAlternate,
                        country : subscription.country,
                        state : subscription.state,
                        city : subscription.city,
                        address : subscription.address,
                        zipCode : subscription.zipCode,

                    }
            });
        }
    })


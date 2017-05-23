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

    .service('DashboardService',function($http){
        this.getCustomerInformation = function(id)
        {
            return $http({
                url : '/customer-information/'+id,
                method: "GET",
                /*params: {email: user.email, pwd : user.pwd}*/
            });
        }

        this.updateCustomer = function (customer) {

            return $http.post('/update-customer',{customerId : customer.customerId,email: customer.email});
        }
    })


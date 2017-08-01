angular.module("gpApp")
    .service('AuthService', function($http,RouterService) {
        this.authenticate = function (user) {

           //http://techfunda.com/howto/565/http-post-server-request
            var data = $.param({
                email: user.email,
                pwd : user.pwd
            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(user.authUrl, data, config);

        }
		
		this.resetPassword = function (email) {
            var url = RouterService.getEndPoint() + '/reset-password'

            return $http({
                url : RouterService.getEndPoint() + '/reset-password',
                method: "GET",
                params: {email: email}
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

            var url = RouterService.getEndPoint() + '/update-customer';
            var data = $.param({
                customerId : customer.customerId,lastName : customer.lastName,
                firstName : customer.firstName,email: customer.email,
                phonePrimary : customer.phonePrimary, phoneAlternate : customer.phoneAlternate,
                country : customer.country, state : customer.state, city : customer.city,
                address : customer.address, zipCode : customer.zipCode

            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(url, data, config);
        }

        this.updatePassword = function (customer) {

            var url = RouterService.getEndPoint() + '/update-password';
            var data = $.param(
                {

                customerId : customer.customerId,
                 oldPassword : customer.oldPassword,
                newPassword : customer.newPassword,
                cNewPassword : customer.cNewPassword
                });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(url, data, config);
        }


        this.subscribeHouse = function (subscription) {

            var url = RouterService.getEndPoint() + '/subscribe-house';
            var data = $.param(
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

                });


            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(url, data, config);

        }

        this.addRecurringPayments = function(paymentInfo)
        {
            //var url = RouterService.getEndPoint() + '/ccaddrecurring'
            var url = RouterService.getEndPoint() + '/ccsale'
            var data = $.param({
                amount: paymentInfo.amount,
                cardNumber : paymentInfo.cardNumber,//'5123456789012346', //visa : 4987654321098769
                cvv : paymentInfo.cvv,
                expirationDate :   paymentInfo.expMonth+""+paymentInfo.expYear,
                nameOnCard : paymentInfo.nameOnCard,
                cardType : paymentInfo.cardType,
                planName : paymentInfo.planName,
                customerId : paymentInfo.customerId,
                country : paymentInfo.country,
                state : paymentInfo.state,
                city : paymentInfo.city,
                address : paymentInfo.address,
                zipCode : paymentInfo.zipCode,
                firstName : paymentInfo.cFirstName,
                lastName : paymentInfo.cLastName,
                phonePrimary : paymentInfo.cPhonePrimary,
                phoneAlternate : paymentInfo.cPhoneAlternate

            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(url, data, config);
        }

        this.getPlanPrice = function(countryISO3,planId){
            console.log(countryISO3 + " " + planId);
            return $http({
                url : RouterService.getEndPoint() + '/plan-price',
                method: "GET",
                params:
                    {
                        countryISO3 : countryISO3,
                        planId : planId
                    }
            });
        }
    })

    .service('AdminService',function($http,RouterService){

        this.getTechnicianInformation = function(id)
        {
            return $http({
                url : RouterService.getEndPoint() + '/technician-information/'+id,
                method: "GET",

            })

        }



    })
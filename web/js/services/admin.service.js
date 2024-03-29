angular.module("gpApp")
    .service('AdminService', function($http, RouterService) {
         this.authenticate = function (admin) {

            //http://techfunda.com/howto/565/http-post-server-request
            var data = $.param({
                email: admin.email,
                pwd : admin.pwd
            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(admin.authadmUrl, data, config);
        }

        this.createCustomer = function(customer)
        {
            var url = RouterService.getEndPoint() + '/admin/customer/save'

            var data = $.param({
                firstName: customer.firstName,
                lastName : customer.lastName,
                email : customer.email,
                pwd :   customer.pwd,
                cPwd : customer.cPwd,
                phonePrimary : customer.phonePrimary,
                phoneAlternate : customer.phoneAlternate,
                country : customer.country,
                state : customer.state,
                city : customer.city,
                address : customer.address,
                zipCode : customer.zipCode
            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(url, data, config);
        }


        this.getTechnicianInformation = function(id)
        {
            return $http({
                url : RouterService.getEndPoint() + '/admin/technician-information/'+id,
                method: "GET",

            })

        }

        this.updateTechnician = function (technicianUpdated) {

            var url = RouterService.getEndPoint() + '/admin/technician/update';
            var data = $.param({
                technicianId : technicianUpdated.technicianId,lastName : technicianUpdated.lastName,
                firstName : technicianUpdated.firstName,email: technicianUpdated.email,
                phonePrimary : technicianUpdated.phonePrimary, phoneAlternate : technicianUpdated.phoneAlternate, profession : technicianUpdated.profession,
                country : technicianUpdated.country, state : technicianUpdated.state, city : technicianUpdated.city,
                address : technicianUpdated.address, zipCode : technicianUpdated.zipCode

            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(url, data, config);
        }

        this.getAgentInformation = function(id)
        {
            return $http({
                url : RouterService.getEndPoint() + '/admin/agent/'+id,
                method: "GET",

            });
        }

        this.getPriceInformation = function(id)
        {
            return $http({
                url : RouterService.getEndPoint() + '/admin/price/'+id,
                method: "GET",

            });
        }


        this.updateAgent = function (agent) {

            var url = RouterService.getEndPoint() + '/update-agent';
            var data = $.param({
                country : agent.country,city : agent.city,
                phone : agent.phone,address: agent.address,
                localnumberid: agent.localnumberid


            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(url, data, config);
        }

        this.updatePrice = function (price) {

            var url = RouterService.getEndPoint() + '/update-price';
            var data = $.param({
                price : price.price,taxpercentage : price.taxpercentage,
                country : price.country, plan: price.plan,
                priceid: price.priceid,

            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            return $http.post(url, data, config);
        }



        this.setRequestOpen = function(requestId)
        {
            return $http({
                url : RouterService.getEndPoint() + '/admin/request/open/'+requestId,
                method: "POST",

            });
        }

        this.findHouse = function(id){
            return $http.get(RouterService.getEndPoint() + '/admin/house/'+id);
        }

        this.getPayments = function(houseId){
            console.log(RouterService.getEndPoint() + '/admin/payments/'+houseId);
            return $http.get(RouterService.getEndPoint() + '/admin/payments/'+houseId);
        }



    })
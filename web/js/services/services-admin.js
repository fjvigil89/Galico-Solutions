angular.module("gpApp")
    .service('AuthAdmService', function($http,RouterService) {
         this.authenticateadmin = function (admin) {

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


    })
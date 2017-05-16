angular.module("gpApp")
    .service('authService', function($http) {
        this.authenticate = function (user) {

            return $http({
                url : '/authenticate',//user.authUrl,
                method: "GET",
                params: {email: user.email, pwd : user.pwd}
            });
        }
    });
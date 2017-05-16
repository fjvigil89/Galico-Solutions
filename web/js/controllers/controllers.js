/**
 * Created by jrhod on 2017-05-15.
 */
angular.module("gpApp")
    .controller('UserController',function($scope,$rootScope,authService){
        $scope.user = {};
        $scope.user.email = "";
        $scope.user.pwd = "";
        $scope.user.authUrl = "";


        $scope.authenticate = function()
        {
            authService.authenticate($scope.user)
                .then(function(response){
                    //console.log(response.data.userId);
                    var userId = response.data.userId;
                    $('#frm_signin').attr('action', '/my-dashboard/'+userId);
                    $('#frm_signin').submit();

                },function(error){
                    console.log(error);
                })
        }
    })

/**
 * Created by jrhod on 2017-05-15.
 */
var app = angular.module("gpApp",[]);

app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[').endSymbol(']}');
});
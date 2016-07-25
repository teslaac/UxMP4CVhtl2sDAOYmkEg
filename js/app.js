// 'use strict';


// angular.module('app', [
//     'ngAnimate',
//     'ngCookies',
//     'ngResource',
//     'ngSanitize',
//     'ngTouch',
//     'ngStorage',
//     'ui.router',
//     'ui.bootstrap',
//     'ui.load',
//     'ui.jq',
//     'ui.validate',
//     'oc.lazyLoad',
//     'pascalprecht.translate'
// ]);

var app = angular.module('app', ['angularUtils.directives.dirPagination']);

app.controller('listdata',function($scope, $http){
    $scope.users = []; //declare an empty array
    $http.get("http://localhost/acadah/students/api").success(function(response){ 
        $scope.users = response;  //ajax request to fetch data into $scope.data
    });
    
    $scope.sort = function(keyname){
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    }
});
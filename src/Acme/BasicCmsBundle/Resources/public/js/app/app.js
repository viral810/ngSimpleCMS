angular.module("HouseTO", ['ngRoute'])

    .controller("MainCtrl", function ($scope) {
        $scope.hello = 'Hello';
    })
    .config(function($routeProvider){
        $routeProvider
            .when('/', {
                templateUrl : '/home/',
                controller  : 'MainCtrl'
            })
    });
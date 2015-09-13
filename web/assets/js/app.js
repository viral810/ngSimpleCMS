/**
 * Created by viralpatel on 2015-08-31.
 */
var myCMSapp = angular.module('myCMS', ['ngRoute']);

myCMSapp.controller('AdminCtrl', AdminController1);

function AdminController1() {
    alert('Hello');
}
myCMSapp.config(['$routeprovider',
    function ($routeProvider) {

       var url = window.location.href;

        if(ur.indexOf('/page/list')){
            alert('This is a page list');
        }
    }]);
/* 
 The function wrapper will serve as a way for us to not create global variables within our JavaScript code.
 Createed the app module and add in the ngRoute module to use later on.
 Getting the routing to work with a home page.
 */

// function wrapper will serve as a way for us to not create global variables
(function () {
    'use strict';
    angular
            .module('app', ['ngRoute'])
            .config(config);
    // accepts a function with a injection
    config.$inject = ['$routeProvider'];

    function config($routeProvider) {
        $routeProvider.
                when('/', {
                    templateUrl: 'js/phone-list.template.html',
                    controller: 'PhoneListController',
                    controllerAs: 'vm'
                }).
                //pass the phone id so we can view more information about a single phone
                when('/phones/:phoneId', {
                    templateUrl: 'js/phone-detail.template.html',
                    controller: 'PhoneDetailController',
                    controllerAs: 'vm'
                }).
                otherwise({
                    redirectTo: '/'
                });
    }

})();
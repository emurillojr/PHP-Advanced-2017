/* 
 Here we will be using the angular provided service called $http.  
 It will also us to make AJAX calls with a built-in promise and other built-in features that are useful. 
 We are also injecting the REQUEST constant to know the location of the data to call.
 */

(function () {

    'use strict';
    angular
            .module('app')
            .factory('PhonesService', PhonesService);

    PhonesService.$inject = ['$http', 'REQUEST'];

    function PhonesService($http, REQUEST) {

        var url = REQUEST.Phones;

        //add a function that will help us find the result of just one phone record. 
        //We will need to get the array of phones, loop through them, then match each phone id with the one we are trying to look for. 

        var service = {
            'getPhones': getPhones,
            'findPhone': findPhone
        };
        return service;

        /////////////

        function getPhones() {
            return $http.get(url)
                    .then(getPhonesComplete, getPhonesFailed);

            function getPhonesComplete(response) {
                return response.data;
            }

            function getPhonesFailed(error) {
                return [];
            }
        }


        function findPhone(id) {

            return getPhones()
                    .then(function (data) {
                        return findPhoneComplete(data);
                        ;
                    });

            function findPhoneComplete(data) {
                var results = {};

                angular.forEach(data, function (value, key) {
                    if (!results.length) {
                        if (value.hasOwnProperty('id') && value.id === id) {
                            results = angular.copy(value);
                        }
                    }
                }, results);
                return results;
            }
        }
    }


})();

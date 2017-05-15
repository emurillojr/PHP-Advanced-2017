/* 
 creating a service for our application
 This file is helpful in keeping constant values in our application in such a way that it can be reused throughout the app
 Notice that the url reference to the data/phones.json file is actually relative to where the index.html page will read the file from, not from the location of the constant.js file itself.
 */


(function () {
    'use strict';

    angular
            .module('app')
            .constant('REQUEST', {
                'Phones': './data/phones.json'
            });

})();
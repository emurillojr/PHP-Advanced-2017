/* 
 added controller
 
 our service is make a call to get the json data, we need our controller to call and get the data for the view page.
 The service will make the ajax call, and return the data in the form of a promise.  We then set our view model variable phones to that data.  
 Angular will in turn auto update the view when the value for vm.phones has been updated.  That is the why angular is a VMMV (view to model, model to view) framework.
 */


(function () {
    'use strict';
    angular
            .module('app')
            .controller('PhoneListController', PhoneListController);

    PhoneListController.$inject = ['PhonesService'];

    // not a private function
    function PhoneListController(PhonesService) {
        var vm = this;

        vm.phones = [];

        activate();

        ////////////

        function activate() {
            PhonesService.getPhones().then(function (response) {
                vm.phones = response;
            });
        }
    }

})();



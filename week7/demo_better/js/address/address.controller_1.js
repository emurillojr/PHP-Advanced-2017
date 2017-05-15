(function () {
    
    'use strict';
    angular
        .module('app.address')
        .controller('AddressController_1', AddressController_1);

    AddressController_1.$inject = ['AddressService'];
    /*
     * Simple controller to get information for the view.
     */
    function AddressController_1(AddressService) {
        var vm = this;

        vm.addresses = [];

        activate();

        ////////////

        function activate() {
            AddressService.deleteAddresses().then(function (response) {
                vm.addresses = response;
            });
        }

    }
    
})();
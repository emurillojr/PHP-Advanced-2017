/* 
 created another view
 added controller
 */


(function () {
    'use strict';
    angular
            .module('app')
            .controller('PhoneDetailController', PhoneDetailController);

    PhoneDetailController.$inject = ['$routeParams', 'PhonesService'];

    function PhoneDetailController($routeParams, PhonesService) {
        var vm = this;

        vm.phones = {};
        var id = $routeParams.phoneId;
        activate();

        ////////////

        function activate() {
            //update phone-detail.controller.js using the PhonesService.findPhone function.
            PhonesService.findPhone(id).then(function (response) {
                vm.phone = response;
            });
        }
    }

})();



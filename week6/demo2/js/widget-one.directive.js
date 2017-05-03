'use strict';
angular
    .module('app.widgets')
    .directive('widgetOne', widgetOne);

function widgetOne() {
    var directive = {
        restrict: 'EA',
        templateUrl: 'templates/widget-one.directive.html',
        scope: {
            title: '@',  // one way
            todoItems: '=',  // back end and front end
            removeItem: '&'  // passing function to controller
        },
        link: link  // what it does when first starts the view
        
    };
    return directive;

    function link(scope, element, attrs) {
      
    }
}

// component how the view should be rendered
// directs are all about editing html
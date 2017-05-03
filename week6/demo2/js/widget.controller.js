'use strict';
angular
    .module('app.widgets')
    .controller('WidgetController', WidgetController);

WidgetController.$inject = ['TodoService'];  //inject dependency

function WidgetController(TodoService) {
    var vm = this;  // reference parent function
    
    vm.todoItems = TodoService.getTodoList();    
    vm.addTodoItem = TodoService.add;
    vm.removeTodoItem = TodoService.remove;
    
    
}

// only job is to get ddata for the view
// controllers extrememly light
// vm = view model

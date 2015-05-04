'use strict';


// Declare app level module which depends on filters, and services
angular.module('productApp', [
  'ngRoute',
  'productApp.filters',
  'productApp.services',
  'productApp.directives',
  'productApp.controllers',
  'productApp.factory'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/add', {templateUrl: 'project/addCatorgy', controller: 'MyCtrl1'});
  $routeProvider.when('/edit', {templateUrl: 'project/edit', controller: 'MyCtrl2'});
}]);

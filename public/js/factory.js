'use strict';


angular.module('productApp.factory', []).
	factory('modalDialog', ['$window', function($window) {
    return {
        confirm: function(message) {
            return $window.confirm(message);
        }
    }
}]);

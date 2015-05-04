'use strict';

/* Directives */

var FLOAT_REGEXP = /^-?\d+((.|\,)\d+)?$/;
angular.module('productApp.directives', []).
  directive('float', [function() {
    return function(scope, elm, attrs,ctrl) {
      ctrl.$parsers.unshift(function(viewValue) {
          if (FLOAT_REGEXP.test(viewValue)) {
            ctrl.$setValidity('float', true);
            return parseFloat(viewValue.replace(',', '.'));
          } else {
            ctrl.$setValidity('float', false);
            return undefined;
          }
        });
    };
  }]);

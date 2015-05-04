'use strict';

/* Controllers */

angular.module('productApp.controllers', []).
  controller('ProductCtrl1', ['$scope','$http','$window','modalDialog',function($scope,$http,modalDialog) {
  	// init call
  	$scope.products = [];
  	$scope.name = '';
  	$scope.description = '';
  	$scope.width = '';
  	$scope.height = '';
  	$scope.length = '';
  	$scope.weight = '';
  	$scope.value = '';
  	$scope.id = '';

  	$scope.initcall = function(){
  		$http({
  			method: 'GET', 
  			url: 'project/returnlist', 
  			cache: false
  		}).
	      success(function(data, status) {
	        $scope.products = data;
	      }).
	      error(function(data, status) {
	        alert('Please contact support team!!!');
	    });
  	};
  	$scope.addProduct = function() {
      if(isNaN($scope.width) ===true || isNaN($scope.height) ===true || isNaN($scope.length) ===true || isNaN($scope.weight) ===true || isNaN($scope.value) ===true){
        alert('Your Input number is not correct, please input again!!!');
        $scope.id = '';
        $scope.name = '';
        $scope.description = '';
        $scope.width = 0;
        $scope.height = 0;
        $scope.length = 0;
        $scope.weight = 0;
        $scope.value = 0;
      }else if($scope.name == '' ){
        alert('You are not allow to entry empty name, please input again!!!');
        $scope.id = '';
        $scope.name = '';
        $scope.description = '';
        $scope.width = 0;
        $scope.height = 0;
        $scope.length = 0;
        $scope.weight = 0;
        $scope.value = 0;
      }else{
        var postData = {
          id:$scope.id,
          name:$scope.name,
          description:$scope.description,
          width:$scope.width,
          height:$scope.height,
          length:$scope.length,
          weight:$scope.weight,
          value:$scope.value
        };
        console.log(postData);
        $http({
              url: 'project/addCatorgy',
              method: "POST",
              data: postData
          }).success(function (data, status, headers, config) {
            if(status === 200) {
              $scope.products=data;
              $scope.name = '';
              $scope.description = '';
              $scope.width = 0;
              $scope.height = 0;
              $scope.length = 0;
              $scope.weight = 0;
              $scope.value = 0;  
            }
          }).error(function (data, status, headers, config) {
            alert('Please contact support team!!!');
          });
      }
  		
  	};
  	$scope.editProduct = function(id) {
  		var target = $scope.products;
    	for(var index =0; index < target.length; index++){
    		if(target[index].id == id){
    			$scope.id = target[index].id;
    			$scope.name = target[index].name;
			  	$scope.description = target[index].description;
			  	$scope.width = target[index].width;
			  	$scope.height = target[index].height;
			  	$scope.length = target[index].length;
			  	$scope.weight = target[index].weight;
			  	$scope.value = target[index].value;
    		}
    	}
    	$scope.products = target;
  	};
  	$scope.deleteProduct = function(id) {
      if (confirm("Are you sure you want to delete this order?") == true) {
    		$http({
    			method: 'GET', 
    			url: 'project/delete?id='+id, 
    			cache: false
    		}).
  	      success(function(data, status) {
  	        
  	        if(status ===200){
  	        	var target = $scope.products;
  	        	for(var index =0; index < target.length; index++){
  	        		if(target[index].id == id){
  	        			target.splice(index,1);
  	        		}
  	        	}
  	        	$scope.products = target;
  	        }
  	      }).
  	      error(function(data, status) {
  	        alert('Please contact support team!!!');
  	    });
      }
  	};
  }]);
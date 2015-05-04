<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" ng-app="productApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="public/css/project.css">
	
</head>
<body ng-controller="ProductCtrl1">
	<div id="container" >
		
		<table class="table table-hover" ng-init="initcall()">
	      <thead>
	        <tr>
	          <th>Product ID</th>
	          <th>Name</th>
	          <th>Description</th>
	          <th>Width</th>
	          <th>Length</th>
	          <th>Height</th>
	          <th>Weight</th>
	          <th>Value</th>
	          <th>Operation</th>
	        </tr>
	      </thead>
	      <tbody>
	      	<tr ng-repeat="product in products">
  				<td><span>{{product.id}}</span></td>
  				<td><span>{{product.name}}</span></td>
  				<td><span>{{product.description}}</span></td>
  				<td><span>{{product.width}}</span></td>
  				<td><span>{{product.length}}</span></td>
  				<td><span>{{product.height}}</span></td>
  				<td><span>{{product.weight}}</span></td>
  				<td><span>{{product.value}}</span></td>
  				<td>
  					<a class="edit" href="javascript:void(0)" ng-click="editProduct(product.id)">edit</a>
  					<a class="delete" href="javascript:void(0)" ng-click="deleteProduct(product.id)">delete</a>
  				</td>
			</tr>
	      </tbody>
    	</table>
	</div>
	<div id="form-container">
		<form ng-submit="addProduct()">
			<input type="hidden"  ng-model="id" name="id" value="" placeholder="Name" />
			<input type="text" ng-model="name" name="name" value="" placeholder="Name" />
			<textarea ng-model="description" name="description" placeholder="Description"></textarea>
			
			<input type="number" min="0" ng-model="width" name="width" value="" placeholder="Width"/>
			<input type="number" min="0" ng-model="length" name="length" value="" placeholder="Length"/>
			<input type="number" min="0" ng-model="height" name="height" value="" placeholder="Height"/>
			<input type="number" min="0" ng-model="weight" name="weight" value=""  placeholder="Weight"/>
			<input type="number" min="0" ng-model="value" name="value" value="" placeholder="Value"/>
			<input type="submit" id="submit" value="Submit" placeholder=""/>
		 </form>
		 
	</div>
	

    
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
	<script src="public/lib/angular/angular-route.js"></script>
	<script src="public/js/app.js"></script>
	<script src="public/js/services.js"></script>
	<script src="public/js/controllers.js"></script>
	<script src="public/js/filters.js"></script>
	<script src="public/js/directives.js"></script>
	<script src="public/js/factory.js"></script>
</body>
</html>

	
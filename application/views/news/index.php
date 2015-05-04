<!doctype html>
<html lang="en" ng-app="productApp">
<head>
  <meta charset="utf-8">
  <title>My HTML File</title>
 
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
  <script src="public/js/controller.js"></script>
</head>
<body ng-controller="ProductCtrl1">
 
  <p>Nothing here {{'yet' + '!'}}</p>
  <input ng-click="clickme()" type="button" value="clickme" />
 
</body>
</html>
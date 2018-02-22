<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Angular and Node</title>
<meta name="viewport" content="width=device-width" initial-scale="1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="js/jquery-3.1.1.js">
<script type="text/javascript" src="angular.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
	var app = angular.module('application', []);
	app.controller('registration',function($scope,$http){
		// $scope.name = 'Ade';
		// $scope.email = 'ade@sqi.com';
		//$scope = {"name":"Ade","email":"ade@sqi.com"};
		user = {"name":"Ade","email":"ade@sqi.com","class":"form-control"};		
		user.submitt = function(){
			$http({
				method : "POST",
				url : "process.php",
				data : user				
			}).then(function mySuccess(response){
				$scope.myResponse = response.data;
			},function myError(response){
				$scope.myResponse = response.statusText;
			});
		}
	});
</script>
<style type="text/css">
	#r1{margin-top: 30px;}
	body{background-color: black; color: white;}
	table{color: white;}
	input{color: black;}

</style>
</head>
<body class="container" ng-app='application'>
<div class="row" id="r1">
	<div class="col-md-3" ng-app='application' ng-controller='registration'>
		<table class="table-bordered">
		<thead>
			<tr>
				<th>Name</th><th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Chrick</td><td>chrick@yahoo.com</td>
			</tr>
			<tr>
				<td><input type="text" ng-model="$scope.name"></td><td><input type="text" ng-model="$scope.email"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Submit" class="form-control btn-info" ng-click="user.submitt()"></td>
			</tr>
		</tbody>
			
		</table>
		{{$scope.name+" "+$scope.email}}
	</div>
</div>
</body>
</html>
var LoginApp = angular.module('LogIn',[]);

LoginApp.controller('User', function ($scope, $http) {

	$scope.user = {
		}
	console.log($scope.user);	
		
	$scope.onSubmit = function(valid){
		console.log(valid);
		if(valid == true){
			console.log("Hey I am submitted");	
		}
		else{
			console.log("Invalid Form");
		}
	} 
	/*$http.post('../php/ajax_login.php', $scope.user).success(function(data){
		console.log(data);
	}).error(function(){
		console.log('Invalid Data');
	})*/
})

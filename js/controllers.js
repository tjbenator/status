var statusApp = angular.module('statusApp', []);

statusApp.controller('ServerListCtrl', function ($scope, $http) {
	$http({method: 'POST', url: '/data.php'}).success(function(data) {
		$scope.servers = data; // response data 
	});
});

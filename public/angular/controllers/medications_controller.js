app.controller("MedicationsCtrl", function ($scope, $rootScope, Medications) {

	Medications.get({},
		function(data) {
			$scope.medications = data.data;
			console.log($scope.medications);
		}
	)
});
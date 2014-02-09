app.controller("MedicationsCtrl", function ($scope, $rootScope, Medications) {

	Medications.get({},
		function(data) {
			$scope.medications = data.data;
		}
	)

	$scope.addMed = function(medication) {
		Medications.add({
			user_id: $rootScope.user_id,
			name: medication.name,
			dosage: medication.dosage,
			requirements: medication.requirements,
			notes: medication.notes
		}, function (data) {
			$scope.medications.push(medication);
		})
	}
});
app.controller("MedicationsCtrl", function ($scope, $rootScope, $routeParams, Medications) {

	Medications.get({},
		function(data) {
			$scope.medications = data.data;
		}
	)

	if ($routeParams.medication_id) {
		Medications.pluck({
			id: $routeParams.medication_id
		}, function(data) {
			$scope.medication = data.data;
		})
	}

	$scope.addMed = function(medication) {
		Medications.add({
			user_id: $rootScope.user_id,
			name: medication.name,
			dosage: medication.dosage,
			requirements: medication.requirements,
			notes: medication.notes
		}, function (data) {
			$scope.medications.push(medication);
			window.location = "#/"
		})
	}

	$scope.updateMed = function(medication) {
		Medications.update({
			id: $routeParams.medication_id,
			name: medication.name,
			dosage: medication.dosage,
			requirements: medication.requirements,
			notes: medication.notes
		}, function (data) {
			window.location = "#/"
		})
	}
});
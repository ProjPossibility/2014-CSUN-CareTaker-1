app.controller("MedicationsCtrl", function ($scope, $rootScope, $routeParams, Medications) {

	// Grab all medications for the current user
	Medications.get({},
		function(data) {
			$scope.medications = data.data;
		}
	)

	// Call pluck only when the medication_id is present in the route
	if ($routeParams.medication_id) {
		Medications.pluck({
			id: $routeParams.medication_id
		}, function(data) {
			$scope.medication = data.data;
		})
	}

	// Add a new medication for the user
	$scope.addMed = function(medication) {
		Medications.add({
			user_id: $rootScope.user_id,
			name: medication.name,
			dosage: medication.dosage,
			requirements: medication.requirements,
			notes: medication.notes
		}, function (data) {
			$scope.medications.push(medication);
			window.location = "#/medications"
		})
	}

	// Update specified medication's information
	$scope.updateMed = function(medication) {
		Medications.update({
			id: $routeParams.medication_id,
			name: medication.name,
			dosage: medication.dosage,
			requirements: medication.requirements,
			notes: medication.notes
		}, function (data) {
			window.location = "#/medications"
		})
	}

	// Delete specified medication from user's list.
	$scope.deleteMed = function(medication_id) {
		Medications.delete({
			id: medication_id
		}, function(data) {
			window.location = "#/medications"
		})
	}
});
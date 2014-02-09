app.controller("AppointmentsCtrl", function ($scope, $rootScope, Appointments){

	$scope.addAppt = function(appointment) {
		Appointments.add({
			user_id: $rootScope.user_id,
			name: appointment.name,
			location: appointment.location
		}, function (data) {
			console.log(appointment);
			$scope.appointments.push(appointment);
		})
	}
});
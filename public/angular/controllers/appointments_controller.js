app.controller("AppointmentsCtrl", function ($scope, $rootScope, Appointments){

	$scope.addAppt = function(appointment) {
		Appointments.add({
			user_id: $rootScope.user_id,
			name: appointment.name,
			location: appointment.location,
			appointment_datetime: appointment.datetime
		}, function (data) {
			$scope.appointments.push(appointment);
		})
	}
});
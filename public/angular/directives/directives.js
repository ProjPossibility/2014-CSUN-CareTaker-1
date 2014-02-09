angular.module('directives', [])
.directive('navbar', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/navbar.html'
	}
})
.directive('siteTabs', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/site_tabs.html'
	}
})
.directive('medications', function() {
	return {
		restrict: 'E',
		replace: 'true',
		controller: 'MedicationsCtrl',
		templateUrl: 'angular/directives/medications.html'
	}
})
.directive('contacts', function() {
	return {
		restrict: 'E',
		replace: 'true',
		controller: 'ContactsCtrl',
		templateUrl: 'angular/directives/contacts.html'
	}
})
.directive('weather', function(){
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/weather.html',
		controller: 'WeatherCtrl'
	}
})
.directive('appointments', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/appointments.html'
	}
})
.directive('appointmentsToday', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/appointments_today.html'
	}
})
.directive('notifications', function(){
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/notifications.html'
	}
})
.directive('calendar', function() {
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: 'angular/directives/calendar.html',
		controller: 'CalendarCtrl'
	}
})
.directive('reminder', function() {
	return {
		restrict: 'E',
		replace: true,
		controller: function($scope, $rootScope, Notifications) {

			$scope.toggleReminder = function(reminder)
			{
				Notifications.put({
					'id': reminder.id
				}, function (data) {
					//
				});
			}

			$scope.remaining = function()
			{
				var count = 0;
				
				angular.forEach($scope.notifications, function (reminder) {
			  		count += reminder.done == 1 ? 0 : 1;
				});
				
				return count;
			};

			$scope.archive = function()
			{
				var oldTodos = $scope.notifications;
				
				$scope.notifications = [];
				
				angular.forEach(oldTodos, function (reminder) {
			  		if (reminder.done == 0) $scope.notifications.push(reminder);
			  		else {
			  			Notifications.delete({
			  				'id': reminder.id
			  			}, function (data) {
			  				//
			  			});
			  		}
				});
			};
		},
		templateUrl: 'angular/directives/reminders.html'
	}
})
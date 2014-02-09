'use strict';

var app = angular
	.module('carefree', [
		'ngResource',
		'ngRoute',
		'directives',
		'factories.user_info',
		'factories.users',
		'factories.appointments',
		'factories.medications',
		'factories.contacts',
		'ui.bootstrap',
		'ui.calendar',
		'ui.select2'
	])
	.config(['$routeProvider', 
		function ($routeProvider) {
			$routeProvider
				.when('/', {
					templateUrl: 'angular/partials/home.html',
					controller: 'HomeCtrl'
				})
				.when('/medications', {
					templateUrl: 'angular/directives/medications.html'
				})
				.when('/calendar', {
					templateUrl: 'angular/directives/calendar.html',
					controller: 'CalendarCtrl'
				})
				.when('/appointments', {
					templateUrl: 'angular/directives/appointments.html'
				})
				.when('/contacts', {
					templateUrl: 'angular/directives/contacts.html',
					controller: 'ContactsCtrl'
				})
				.when('/weather', {
					templateUrl: 'angular/directives/weather.html',
					controller: 'WeatherCtrl'
				})
				.when('/add-medication', {
					templateUrl: 'angular/partials/add_medication.html',
					controller: 'MedicationsCtrl'
				})
				.when('/medications/:medication_id/modify', {
					templateUrl: 'angular/partials/modify_medication.html',
					controller: 'MedicationsCtrl'
				})
				.otherwise(({redirectTo: '/'}))
		}
	])
	.run(['$rootScope', 'UserInfo', 'Users', 'Appointments', 'Medications', 
		function ($rootScope, UserInfo, Users, Appointments, Medications) {
			UserInfo.get({}, function (data) {
				if (!$rootScope.user_id) {
					$rootScope.user_id = data.data.id;
					$rootScope.email = data.data.email;
					$rootScope.first_name = data.data.first_name;
					$rootScope.last_name = data.data.last_name;
				}

				Users.get({
					'id': $rootScope.user_id,
					'resource': 'appointments'
				}, function (data) {
					$rootScope.appointments = data.data;
				});

				Medications.get({},
					function(data) {
						$rootScope.medications = data.data;
					}
				)
			});

			$rootScope.notifications = [];

			//Wait for WeatherCtrl to load up $rootScope.getWeather function
			var killWatch = $rootScope.$watch('getWeather', function(curr, prev){
				if(curr === prev) return;
				$rootScope.getWeather();
				killWatch();
			}, true);

			//Update the weather information every x ms
			$rootScope.weatherIntervalId = setInterval(function() {
				$rootScope.getWeather();
			}, 120000);//5 mins = 300,000 ms

		}
	]
);












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

			// $rootScope.weatherIntervalId = setInterval(function() {
			// 	$rootScope.getWeather();
			// }, 300000);//5 mins = 300,000 ms

			setTimeout(function() {
				$rootScope.getWeather();
			}, 1000);

		}
	]
);












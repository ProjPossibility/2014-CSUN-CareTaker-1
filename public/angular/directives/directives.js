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
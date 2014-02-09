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

			$rootScope.weatherIconUrl = "img/default.png";

			/*
			   Have some hard coded JSON data from the "API" that would
			   cause alerts (i.e Heavy Rain, Flaming hot, tornadoe?)
			*/

			var target = document.getElementById("weather-spinner");
			$rootScope.spinner = new Spinner().spin(target);

			$rootScope.getWeather = function(){

			   var tempLowExtreme = 60, tempHighExtreme = 70;

			   var getWeatherData = function(position){

			      var lat = position.coords.latitude.toFixed(2);
			      var lon = position.coords.longitude.toFixed(2);

			      $http({
			         method: "GET",
			         url: "http://api.openweathermap.org/data/2.5/weather?"+
			            "lat="+lat+"&lon="+lon
			      })
			      .success(function(data, status){
			         console.log("SUCCESS! Status: " + status);
			         $rootScope.weatherData = data;

			         //Might not need $rS.temp. Can calc in {{}} in html?
			         $rootScope.temperature = parseInt(1.8*(data.main.temp - 273.15)+32);
			         if($rootScope.temperature < tempLowExtreme){
			            //Warning - low temp
			            $rootScope.notifications.push({
			               title: "Warning: Low Temperature",
			               message: "Wear a coat. The temperature is low outside."
			            });
			         }
			         if($rootScope.temperature > tempHighExtreme){
			            //Warning - high temp
			            $rootScope.notifications.push({
			               title: "Warning: High Temperature",
			               message: "Stay hydrated. The temperature is high outside."
			            });
			         }

			         if($rootScope.notifications.length > 1){
			            $rootScope.notifications.shift();
			         }


			         var weatherList = data.weather;
			         weatherList = weatherList.sort(function(a, b){
			            return a.id < b.id;
			         });


			         var weatherIconUrl = "http://openweathermap.org/img/w/";
			         var weatherIcon = undefined;
			         for(var i=0; i<weatherList.length; i++){
			            if(weatherList[i].icon !== undefined){
			               weatherIcon = weatherList[i].icon;
			               $rootScope.weatherDescription = weatherList[i].description;
			               break;
			            }
			         }

			         if(weatherIcon === undefined){
			            $rootScope.weatherIconUrl = "img/default.png";
			         }
			         else{
			            weatherIconUrl += weatherIcon + ".png";
			            $rootScope.weatherIconUrl = weatherIconUrl;
			         }

			         $rootScope.spinner.stop();
			         console.log('GOT WEATHER!');
			      })
			      .error(function(data, status){
			         console.log("ERROR! Status: " + status);
			         
			         $rootScope.spinner.stop();

			      });
			   }

			   if (navigator.geolocation){//Geolocation is supported
			      navigator.geolocation.getCurrentPosition(getWeatherData);
			   }
			   else{
			     //Geolocation is not supported by this browser.
			   }      
			} 

			//Wait for WeatherCtrl to load up $rootScope.getWeather function
			$rootScope.getWeather();

			//Update the weather information every x ms
			$rootScope.weatherIntervalId = setInterval(function() {
				$rootScope.getWeather();
			}, 120000);//5 mins = 300,000 ms




			/* Check if an appointment is upcoming (today or tomorrow) */
			$rootScope.checkAppointmentDate = function (date) {
				var appointmentDate = new Date(date);
				var dateToday = new Date();

    			var dateNow = dateToday.getDate();
    			var appointmentDateNow = appointmentDate.getDate();
    			
    			if (appointmentDateNow == dateNow) {
    				return "Today";
    			} else if (dateDay == dateNow+1) {
    				return "Tomorrow";
    			}

    			return date;
			}
		}
	]
);












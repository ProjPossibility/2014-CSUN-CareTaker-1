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
		'factories.notifications',
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
				.when('/contacts/:contact_id/modify', {
					templateUrl: 'angular/partials/modify_contact.html',
					controller: 'ContactsCtrl'
				})
				.when('/add-contact', {
					templateUrl: 'angular/partials/add_contact.html',
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
				.when('/medications/:medication_id', {
					templateUrl: 'angular/partials/view_medication.html',
					controller: 'MedicationsCtrl'
				})
				.when('/medications/:medication_id/modify', {
					templateUrl: 'angular/partials/modify_medication.html',
					controller: 'MedicationsCtrl'
				})
				.otherwise(({redirectTo: '/'}))
		}
	])
	.run(['$rootScope', '$http', 'UserInfo', 'Users', 'Appointments', 'Medications', 'Notifications',
		function ($rootScope, $http, UserInfo, Users, Appointments, Medications, Notifications) {

			$rootScope.notifications = [];

			UserInfo.get({}, function (data) {
				if (!$rootScope.user_id) {
					$rootScope.user_id = data.data.id;
					$rootScope.email = data.data.email;
					$rootScope.first_name = data.data.first_name;
					$rootScope.last_name = data.data.last_name;
					$rootScope.opt_in = data.data.opt_in;
				}

				Users.get({
					'id': $rootScope.user_id,
					'resource': 'appointments'
				}, function (data) {
					$rootScope.appointments = data.data;
				});

				Medications.get({}, function (data) {
					$rootScope.medications = data.data;
				});

				Notifications.get({}, function (data) {
					$rootScope.notifications = data.data;
					angular.forEach($rootScope.notifications, function (reminder) {
			  			reminder.is_active == 1 ? reminder.is_active = false : reminder.is_active = true;
					});
				});
			});

			$rootScope.weatherIconUrl = "img/default.png";

			/*
			   Have some hard coded JSON data from the "API" that would
			   cause alerts (i.e Heavy Rain, Flaming hot, tornadoe?)
			*/

			/*
				Have the API take a lat and lon, then the API will get the weather
				data, and push new notifications if needed
			*/

			$rootScope.locationInfo = {
				prevLat: undefined,
				prevLon: undefined,
				timeInSameLocation: 1
			}

			$rootScope.getWeather = function(){

			   var tempLowExtreme = 0, tempHighExtreme = 10;

			   var getWeatherData = function(position){

			      var lat = position.coords.latitude.toFixed(2);
			      var lon = position.coords.longitude.toFixed(2);

			      if(lat == $rootScope.locationInfo.prevLat &&
			      		lon == $rootScope.locationInfo.prevLon){
			      	$rootScope.locationInfo.timeInSameLocation++;
			      }

			      else{
			      	$rootScope.locationInfo.timeInSameLocation = 1;
			      }

			      console.log($rootScope.locationInfo.timeInSameLocation);

			      console.log('times in same location: ' + $rootScope.locationInfo.timeInSameLocation);

			      $rootScope.locationInfo.prevLat = lat;
			      $rootScope.locationInfo.prevLon = lon;


			      $http.get("http://api.openweathermap.org/data/2.5/weather?"+"lat="+lat+"&lon="+lon)
			      .success(function(data, status){
			         $rootScope.weatherData = data;

			         //Might not need $rS.temp. Can calc in {{}} in html?
			         $rootScope.temperature = parseInt(1.8*(data.main.temp - 273.15)+32);
			         if($rootScope.temperature < tempLowExtreme){

							Notifications.post({
      	               title: "Low Temperature",
      	               notification: "Brr, it's cold outside!",
      	               severity_id: 2,
      	               resources_type_id: 2
			            }, 
			            function(data){
			            	for(var i=0; i<$rootScope.notifications.length; i++){
			            		if($rootScope.notifications[i].resources_type_id == 2){
			            			$rootScope.notifications.splice(i, 1);
			            		}
			            	}
			            	$rootScope.notifications.push(data.data);
			            });

			         }
			         else if($rootScope.temperature > tempHighExtreme){

							Notifications.post({
      	               title: "It's hot outside, stay hydrated!",
      	               notification: "Stay hydrated. The temperature is high outside.",
      	               severity_id: 2,
      	               resources_type_id: 2
			            }, 
			            function(data){
			            	for(var i=0; i<$rootScope.notifications.length; i++){
			            		if($rootScope.notifications[i].resources_type_id == 2){
			            			$rootScope.notifications.splice(i, 1);
			            		}
			            	}
			            	$rootScope.notifications.push(data.data);
			            });

				
			         }

			         for(var i = $rootScope.notifications.length-2; i >= 0; i--){
			         	if($rootScope.notifications[i].resources_type_id == 2){
			         		$rootScope.notifications.splice(i, 1);
			         		break;
			         	}
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
			               $rootScope.weatherDescription = weatherList[i].description[0].toUpperCase() + 
			               	weatherList[i].description.substring(1, weatherList[i].description.length);
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
			         
			      });
			   }

			   if (navigator.geolocation){//Geolocation is supported
			      navigator.geolocation.getCurrentPosition(getWeatherData);
			   }
			   else{
			     console.log("Geolocation is not supported by this browser.");
			   }      
			} 

			$rootScope.addCSSClass = function (notification) {
				var css_class = "";
		
				switch(parseInt(notification.severity_id))
				{
				case 1:
					css_class = "alert-info";
				  	break;
				case 2:
				  	css_class = "alert-danger";
				  	break;
				case 3:
				  	css_class = "alert-warning";
				  	break;
				default:
				  css_class = "alert-danger";
				}

				return css_class;

			}

			$rootScope.clearNotification = function(index){
				Notifications.delete({
					id: $rootScope.notifications[index].id
				});
				$rootScope.notifications.splice(index, 1);
			}

			$rootScope.generate_notifications = function(){
				Users.get({
					'id': $rootScope.user_id,
					'resource': 'generate-notifications'
				}, function (data) {
					$rootScope.notifications = data.data;
				});

			}

			//Wait for user.opt_in to be set
			$rootScope.visible = $rootScope.opt_in;
			var killVisibleWatch = $rootScope.$watch('opt_in', function(curr, prev){
				if(curr == prev) return;
				console.log('opt_in:' + $rootScope.opt_in);
				if($rootScope.opt_in == 1){
					$rootScope.getWeather();
				}
				killVisibleWatch();
			});

			//Update the weather information every x ms
			$rootScope.weatherIntervalId = setInterval(function() {
				if($rootScope.opt_in == 1){
					$rootScope.getWeather();
				}
			}, 30000);//5 mins = 300,000 ms



			/* Check if an appointment is upcoming (today or tomorrow) */
			$rootScope.checkAppointmentDate = function (date) {
    			var appt_date = new Date(date);
    			return appt_date.toLocaleString();
			}
		}
	]
);












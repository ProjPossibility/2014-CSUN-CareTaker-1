/*******************
Credit to Open Wheater Map API,
which can be found at http://openweathermap.org/
********************/

app.controller("WeatherCtrl", function ($scope, $rootScope, $http) {

   var lat = undefined;
   var lon = undefined;

   $scope.weatherDescription = undefined;

   $rootScope.weatherIconUrl = "img/default.png";
   $rootScope.weatherData = undefined;
   /*
      Have some hard coded JSON data from the "API" that would
      cause alerts (i.e Heavy Rain, Flaming hot, tornadoe?)
   */

   var target = document.getElementById("weather-spinner");
   $scope.spinner = new Spinner().spin(target);

   //Put this into rootScope?
   $rootScope.getWeather = function(){

      var getWeatherData = function(position){

         lat = position.coords.latitude.toFixed(2);
         lon = position.coords.longitude.toFixed(2);

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

            var weatherList = data.weather;
            weatherList = weatherList.sort(function(a, b){
               return a.id < b.id;
            });


            var weatherIconUrl = "http://openweathermap.org/img/w/";
            var weatherIcon = undefined;
            for(var i=0; i<weatherList.length; i++){
               if(weatherList[i].icon !== undefined){
                  weatherIcon = weatherList[i].icon;
                  $scope.weatherDescription = weatherList[i].description;
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

            $scope.spinner.stop();
         })
         .error(function(data, status){
            console.log("ERROR! Status: " + status);
            
            $scope.spinner.stop();

         });
      }

      if (navigator.geolocation){//Geolocation is supported
         navigator.geolocation.getCurrentPosition(getWeatherData);
      }
      else{
        //Geolocation is not supported by this browser.
      }      
   }      
});












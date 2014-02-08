/*******************
Credit to Open Wheater Map API,
which can be found at http://openweathermap.org/
********************/

app.controller("WeatherCtrl", function ($scope, $rootScope, $http) {

   var lat = undefined;
   var lon = undefined;

   /*
      Have some hard coded JSON data from the "API" that would
      cause alerts (i.e Heavy Rain, Flaming hot, tornadoe?)
   */

   //Put this into rootScope?
   $rootScope.getWeather = function(){

      var getWeatherData = function(position){

         lat = position.coords.latitude.toFixed(2);
         lon = position.coords.longitude.toFixed(2);

         // console.log("Lat: " + lat);
         // console.log("Lon: " + lon + "\n");

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

            $rootScope.weatherIcon = undefined;
            for(var i=0; i<weatherList.length; i++){
               if(weatherList[i].icon !== undefined){
                  $rootScope.weatherIcon = weatherList[i].icon;
               }
            }

            if($rootScope.weatherIcon === undefined){
               $rootScope.weatherIcon = "default";
            }

         })
         .error(function(data, status){
            console.log("ERROR! Status: " + status);
         });
      }

      if (navigator.geolocation){//Geolocation is supported
         navigator.geolocation.getCurrentPosition(getWeatherData);
      }
      else{
        //Geolocation is not supported by this browser.
      }      
   }

   //Call getLocation every 5ish mins? Look into using setInterval.
   //Also save the id returned from setInterval to clear the interval

   // $rootScope.getWeather();

   /*
      Sort weather array in decending order, then pick the first
      object that has the icon property set
   */
      
});












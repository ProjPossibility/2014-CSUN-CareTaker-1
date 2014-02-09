app.controller("CalendarCtrl", function ($scope, $rootScope) {

	$scope.dt = new Date();
	$scope.events = [];
	var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    
    $scope.eventSource = { // pulls from Google.com
        url: "http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic",
        className: 'gcal-event',
        currentTimezone: 'America/Los_Angeles'
    };

    $scope.carefreeEvents = { // CareFree SS12 Calendar
    	url: "http://www.google.com/calendar/feeds/carefreess12%40gmail.com/public/basic",
        className: 'gcal-event',
        currentTimezone: 'America/Los_Angeles'
    }

    /* Event source that calls a function on every view switch */
    $scope.eventsF = function (start, end, callback) {
    	var s = new Date(start).getTime() / 1000;
      	var e = new Date(end).getTime() / 1000;
      	var m = new Date(start).getMonth();
      	var events = [
      		{
      			title: ' CareFree Monthly Reminder',
      			start: s + (50000),
      			end: s + (100000),
      			allDay: false,
      			className: ['customFeed']
      		}
      	];
      	callback(events);
    };

    $scope.calEventsExt = {
    	color: '#f00',
       	textColor: 'yellow',
       	events: [
	       	{
	       		type:'party',
	       		title: 'Lunch',
	       		start: new Date(y, m, d, 12, 0),
	       		end: new Date(y, m, d, 14, 0),
	       		allDay: false
	       	},
	       	{
	       		type:'party',
	       		title: 'Lunch 2',
	       		start: new Date(y, m, d, 12, 0),
	       		end: new Date(y, m, d, 14, 0),
	       		allDay: false
	       	},
	       	{
	       		type:'party',
	       		title: 'Click for Google',
	       		start: new Date(y, m, 28),
	       		end: new Date(y, m, 29),
	       		url: 'http://google.com/'
	       	}
        ]
    };

    $scope.alertOnEventClick = function(event, allDay, jsEvent, view){
        $scope.alertMessage = (event.title + ' was clicked ');
    };

    $scope.alertOnDrop = function(event, dayDelta, minuteDelta, allDay, revertFunc, jsEvent, ui, view){
    	$scope.alertMessage = ('Event Droped to make dayDelta ' + dayDelta);
    };

    $scope.alertOnResize = function(event, dayDelta, minuteDelta, revertFunc, jsEvent, ui, view ){
    	$scope.alertMessage = ('Event Resized to make dayDelta ' + minuteDelta);
    };

    /* Add and removes an event source of choice */
    $scope.addRemoveEventSource = function(sources,source) {
    	var canAdd = 0;

     	angular.forEach(sources,function (value, key) {
        	if (sources[key] === source) {
        		sources.splice(key,1);
        		canAdd = 1;
        	}	
    	});

     	if (canAdd === 0) sources.push(source);
    };

    $scope.addEvent = function(title, dt) { // add custom event
		$scope.events.push({
			title: title,
			start: dt,
			end: dt,
			className: ['openSesame']
		});
    };

    $scope.remove = function(index) { // remove event
      $scope.events.splice(index,1);
    };

    $scope.changeView = function(view,calendar) {
    	calendar.fullCalendar('changeView',view);
    };

    $scope.renderCalender = function(calendar) { // change view
     	calendar.fullCalendar('render');
    };

    $scope.uiConfig = { // configuration object
        calendar:{
            height: 450,
            editable: true,
            header:{
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            dayClick: $scope.alertEventOnClick,
            eventDrop: $scope.alertOnDrop,
            eventResize: $scope.alertOnResize,
            render: true
        }
    };

    $scope.eventSources = [$scope.events, $scope.eventSource, $scope.eventsF, $scope.carefreeEvents];
    $scope.eventSources2 = [$scope.calEventsExt, $scope.eventsF, $scope.events];

    /* DateTime */
    $scope.today = function() {
	    $scope.dt = new Date();
	};

	$scope.toggleWeeks = function () {
		$scope.showWeeks = ! $scope.showWeeks;
	};

	$scope.clear = function () {
		$scope.dt = null;
	};

	// Disable weekend selection
	$scope.disabled = function(date, mode) {
		return ( mode === 'day' && ( date.getDay() === 0 || date.getDay() === 6 ) );
	};

	$scope.open = function($event) {
		$event.preventDefault();
		$event.stopPropagation();

	    $scope.opened = true;
	};

	$scope.dateOptions = {
		'year-format': "'yy'",
	    'starting-day': 1
	};

	$scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'shortDate'];
	$scope.format = $scope.formats[0];

	$scope.showWeeks = false;
    
});
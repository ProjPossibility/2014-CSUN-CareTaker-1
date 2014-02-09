<!DOCTYPE html>
<html lang="en" ng-app="carefree">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CareFree</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/select2/3.4.5/select2.min.css'>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.print.css">
        <link rel="stylesheet" href="css/main.css">        
    </head>
    <body ng-cloak>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <navbar></navbar>
        
        <div class="container">
            <div class="row">

                <notifications class="col-md-12"></notifications>

                <div class="col-md-12" ng-view></div>

            </div>
        </div>

        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular-resource.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular-route.js"></script>
        <script src="//code.angularjs.org/1.2.12/angular-animate.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.4.5/select2.min.js"></script>
        <script src="js/libs/angular-calendar.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.min.js"></script>
        <script src="js/libs/gcal.js"></script>
        <script src="js/libs/angular-select2.js"></script>
        <script src="angular/app.js"></script>
        <script src="angular/factories/user_info.js"></script>
        <script src="angular/factories/users.js"></script>
        <script src="angular/factories/appointments.js"></script>
        <script src="angular/factories/medications.js"></script>
        <script src="angular/factories/contacts.js"></script>
        <script src="angular/factories/notifications.js"></script>
        <script src="angular/directives/directives.js"></script>
        <script src="angular/controllers/home_controller.js"></script>
        <script src="angular/controllers/weather_controller.js"></script>
        <script src="angular/controllers/medications_controller.js"></script>
        <script src="angular/controllers/contacts_controller.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/spin.js/1.3.3/spin.min.js"></script>
        <script src="angular/controllers/calendar_controller.js"></script>
    </body>
</html>

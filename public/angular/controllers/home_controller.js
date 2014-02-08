app.controller("HomeCtrl", function ($scope, $rootScope, Users, UserInfo) {

	UserInfo.get({}, // initialize user data upon index page load
		function (data) { // success
			if (!$rootScope.user_id) {
				$rootScope.user_id = data.data.id;
				$rootScope.email = data.data.email;
				$rootScope.first_name = data.data.first_name;
				$rootScope.last_name = data.data.last_name;
			}
		}
	);
		
});
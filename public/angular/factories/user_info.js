angular.module('factories.user_info', ['ngResource'])
	.factory('UserInfo', function ($resource) {
		return $resource('userinfo',
	        {},
	        {
	            get: {
	                method: 'GET'
	            }
	        }
	    );
	}
);
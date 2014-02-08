angular.module('factories.users', ['ngResource'])
	.factory('Users', function ($resource) {
		return $resource('api/v1/users/:id/:resource',
	        {},
	        {
	            get: {
	                method: 'GET',
	                params: {
	                	'id': '@id',
	                	'resource': '@resource'
	                }
	            }
	        }
	    );
	}
);
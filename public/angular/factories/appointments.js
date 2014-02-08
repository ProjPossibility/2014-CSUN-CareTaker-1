angular.module('factories.appointments', ['ngResource'])
	.factory('Appointments', function ($resource) {
		return $resource('api/v1/appointments/:id',
	        {},
	        {
	            get: {
	                method: 'GET',
	                params: {
	                	'id': '@id'
	                }
	            }
	        }
	    );
	}
);
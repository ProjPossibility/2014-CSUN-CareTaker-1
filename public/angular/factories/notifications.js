angular.module('factories.notifications', ['ngResource'])
	.factory('Notifications', function ($resource) {
		return $resource('api/v1/notifications',
	        {},
	        {
	            get: {
	                method: 'GET'
	            },
	            put: {
	            	method: 'PUT',
	            	params: {
	            		'id': '@id'
	            	}
	            },
	            delete: {
	            	method: 'DELETE',
	            	params: {
	            		'id': '@id'
	            	}
	            },
	            post: {
	            	method: 'POST',
	            	params: {
	            		'text': '@text'
	            	}
	            },
	        }
	    );
	}
);
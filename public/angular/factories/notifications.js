angular.module('factories.notifications', ['ngResource'])
	.factory('Notifications', function ($resource) {
		return $resource('api/v1/notifications/:id',
	        {
	        	'id': ''
	        },
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
	            	method: 'POST'
	            }
	        }
	    );
	}
);

	     	               // title: "High Temperature",
      	               // notification: "Stay hydrated. The temperature is high outside.",
      	               // severity_id: 2,
      	               // resources_type_id: 2
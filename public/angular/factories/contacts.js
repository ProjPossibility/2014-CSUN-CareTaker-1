angular.module('factories.contacts', ['ngResource'])
	.factory('Contacts', function ($resource) {
		return $resource('api/v1/medications',
			{},
			{
				get: {
					method: 'GET'
				},
				add: {
					method: 'POST'
				}
			}
		);
	}
);
angular.module('factories.contacts', ['ngResource'])
	.factory('Contacts', function ($resource) {
		return $resource('api/v1/contacts',
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
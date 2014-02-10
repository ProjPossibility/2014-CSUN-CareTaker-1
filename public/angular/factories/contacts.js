angular.module('factories.contacts', ['ngResource'])
	.factory('Contacts', function ($resource) {
		return $resource('api/v1/contacts/:id',
			{
				'id': ''
			},
			{
				get: {
					method: 'GET'
				},
				add: {
					method: 'POST'
				},
				pluck: {
					method: 'GET',
					params: {
						'id': '@id'
					}
				},
				update: {
					method: 'PUT',
					params: {
						'id': '@id'
					}
				}
			}
		);
	}
);
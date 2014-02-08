angular.module('factories.contacts', ['ngResource'])
	.factory('Contacts', function ($resource) {
		return $resource('api/v1/medications/:id',
			{},
			{
				get: {
					method: 'GET',
					params: {
						'id': '@id',
					}
				}
			}
		);
	}
);
angular.module('factories.medications', ['ngResource'])
	.factory('Medications', function ($resource) {
		return $resource('api/v1/medications/:id',
			{
				'id': ''
			},
			{
				get: {
					method: 'GET'
				},
				pluck: {
					method: 'GET',
					params: {
						'id': '@id'
					}
				},
				add: {
					method: 'POST'
				},
				update: {
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
				}
			}
		);
	}
);
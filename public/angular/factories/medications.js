angular.module('factories.medications', ['ngResource'])
	.factory('Medications', function ($resource) {
		return $resource('api/v1/medications/:id/:resource',
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
angular.module('factories.medications', ['ngResource'])
	.factory('Medications', function ($resource) {
		return $resource('api/v1/medications',
			{},
			{
				get: {
					method: 'GET'
				}
			}
		);
	}
);
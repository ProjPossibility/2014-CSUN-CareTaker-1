app.controller("ContactsCtrl", function ($scope, $rootScope, $routeParams, Contacts){

	Contacts.get({},
		function(data) {
			$scope.contacts = data.data;
		}
	)

	if ($routeParams.contact_id) {
		Contacts.pluck({
			id: $routeParams.contact_id
		}, function(data) {
			$scope.contact = data.data;
			console.log($scope.contact);
		})
	}

	$scope.addContact = function(contact) {
		Contacts.add({
			first_name: contact.first_name,
			last_name: contact.last_name,
			phone_number: contact.phone_number,
			email: contact.email
		}, function (data) {
			$scope.contacts.push(data.data);
			window.location = "#/contacts"
		})
	}

	$scope.updateContact = function(contact) {
		Contacts.update({
			id: $routeParams.contact_id,
			first_name: contact.first_name,
			last_name: contact.last_name,
			phone_number: contact.phone_number,
			email: contact.email
		}, function (data) {
			window.location = "#/contacts"
		})
	}
});
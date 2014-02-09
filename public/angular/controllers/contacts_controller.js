app.controller("ContactsCtrl", function ($scope, $rootScope, Contacts){

	Contacts.get({},
		function(data) {
			$scope.contacts = data.data;
		}
	)

	$scope.addContact = function(contact) {

		Contacts.add({
			user_id: $rootScope.user_id,
			first_name: contact.first_name,
			last_name: contact.last_name,
			phone_number: contact.phone_number,
			email: contact.email
		}, function (data) {
			$scope.contacts.push(contact);
			console.log(contact);
		})
	}
});
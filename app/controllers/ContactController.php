<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @link api/v1/contacts	GET
	 * @return Response
	 */
	public function index()
	{
		$contact = Contact::
			with('user')
			->where("contact_for_user_id",Auth::user()->id)
			->orderBy("order_id")
			->get();

	    $response = array(
			'message' 		=> 'Your contacts list has been returned',
			'data'			=> $contact->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @todo allow for different type_ids and not hard-code
	 * @link api/v1/contacts	POST
	 * @return Response
	 */
	public function store()
	{	
		$input = Input::all();



		$rules = array(
            'first_name'           	=> 'required', 
            'last_name'           	=> 'required', 
            'phone_number'          => 'required', 
            'email'          	 	=> 'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
        	return $validator->messages();
        } 

        /* See if user is already in the system */
        $contact_data = User::where("email",$input['email'])->first();

        /* Add New User if they don't exist */
        if (!$contact_data) {

        	/* Consume own API to create user */ 
        	$request = Request::create('/api/v1/users', 'POST', $input);
			$response = json_decode(Route::dispatch($request)->getContent(),true);

			if ($response['status'] == 200) {
				$id = $response['data']['id'];
				$contact_data = User::findOrFail($id);
			} else {
				return $response;
			}

        }

        /* Add new contact */ 
        $contact = new Contact();
		$contact->user_id = $contact_data['id'];
		$contact->contact_for_user_id = Auth::user()->id; // current user
       	$contact->type_id = 1; // temp
       	$contact->order_id = 1;
        
        $contact->save();

        $new_contact = Contact::with("user")->findOrFail($contact->id);

        /* Return Response */
        $response = array(
			'message' 		=> 'The contact has been successfully added.',
			'data'			=> $new_contact->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

	/**
	 * Display specific contact of the current user
	 *
	 * @link api/v1/contacts/{id}	GET
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contact = Contact::
			with("user")
			->where('contact_for_user_id',Auth::user()->id)->findOrFail($id);

		/* Return Response */
        $response = array(
			'message' 		=> 'The contact was found',
			'data'			=> $contact->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @link api/v1/contacts/{id}	PUT
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'first_name'		=> 'required',
			'last_name'			=> 'required',
			'phone_number'		=> 'required',
			'email'				=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			return $validator->messages();
		} 

		// Grab the contact that you want to update
		$contact = Contact::with('user')->findOrFail($id);
		$contact_id = $contact->user_id;

		// Find the associated contact in the user table and upate their information
		$updated_contact = User::findOrFail($contact_id);
		$updated_contact->fill(Input::only(array_keys($rules)));
		$updated_contact->save();

		/* Return Response */
		$response = array(
			'message' 		=> 'The contact has been successfully updated',
			'data'			=> $updated_contact->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @link api/v1/contacts/{id}	DELETE
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$contact = Contact::where('contact_for_user_id',Auth::user()->id)->findOrFail($id);
		$contact->delete();

		/* Return Response */
        $response = array(
			'message' 		=> 'The contact has been been deleted',
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);

	}

}
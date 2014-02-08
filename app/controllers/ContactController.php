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
	 * @todo don't pass user_id pass email and provisions user if need be
	 * @link api/v1/contacts	POST
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'user_id'            	=> 'required|integer', 
            'type_id'            	=> 'required|integer',
            'order_id'      	 	=> 'required|integer'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
        	return $validator->messages();
        } 

        /* Add new contact */ 
        $contact = new Contact();
		$contact->fill(Input::only(array_keys($rules))); // fill valid data only
		$contact->contact_for_user_id = Auth::user()->id; // current user
        $contact->save();

        /* Return Response */
        $response = array(
			'message' 		=> 'The contact has been successfully added',
			'data'			=> $contact->toArray(),
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
		//
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
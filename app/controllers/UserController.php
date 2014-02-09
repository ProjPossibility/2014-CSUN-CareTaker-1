<?php

class UserController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$response = array('data' => User::all()->toArray());

    	return Response::make($response, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		 $userdata = Input::all();
    
        $rules = array(
            'first_name'            => 'required|alpha',
            'last_name'             => 'required|alpha',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required'
        );

        $validator = Validator::make($userdata, $rules);

        if ($validator->fails())
        {
           return $validator->messages();
		}

        $user = new User();
        $user->fill(Input::except('_token', 'password_confirmation'));
        $user->password = Hash::make($userdata['password']);
        $user->save();

        /* Audit Log */ 
        Log::info('New user: ' . $userdata['email']);
       
        $response = array(
			'message' 		=> 'The user has successfully been added..',
			'data'			=> $user->toArray(),
			'status' 	 	=> 200       
		);
		return Response::make($response, 200);
  	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$response = array('data' => User::findOrFail($id)->toArray());

    	return Response::make($response, 200);
	}

	/**
	 * Update the specified resource in storage.
	 *
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
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Show user's appointments
	 *
	 * @link api/v1/users/{id}/appointments	 GET
	 * @param  int  $id
	 * @return Response
	 */
	public function getAppointments($id)
	{
		$response = array(
    		'data'	=> User::findOrFail($id)->appointments->toArray()
    	);

		return Response::make($response, 200);
	}

	/**
	 * Show user's medications
	 *
	 * @link api/v1/users/{id}/medications	GET
	 * @param  int  $id
	 * @return Response
	 */
	public function getMedications($id)
	{
		/* Return Response */
        $response = array(
			'message' 		=> 'The user medication list successfully found',
			'data'			=> User::with("medications")->findOrFail($id)->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

}
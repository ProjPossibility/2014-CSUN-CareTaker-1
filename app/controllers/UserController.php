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
		//
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
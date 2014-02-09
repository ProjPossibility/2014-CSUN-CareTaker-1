<?php

class MedicationController extends \BaseController {

	/**
	 * Return all medications for the logged in user. 
	 *
	 * @link api/v1/medications	GET
	 * @return Response
	 */
	public function index()
	{
		$medication = Medication::where("user_id",Auth::user()->id)->get();
	    $response = array(
			'message' 		=> 'The medication has been successfully found',
			'data'			=> $medication->toArray(),
			'status' 	 	=> 200       
		);
		return Response::make($response, 200);
	}

	/**
	 * Store a newly created medication in storage.
	 *
	 * @link api/v1/medications	POST
	 * @return Medication record
	 */
	public function store()
	{
		$rules = array(
            'user_id'            => 'required|integer',
            'name'               => 'required',
            'dosage'             => 'required',
            'requirements'       => '',
            'notes'				 => ''
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
        	return $validator->messages();
        } 

        /* Add new medication */ 
        $medication = new Medication();
		$medication->fill(Input::only(array_keys($rules))); // fill valid data only
        $medication->save();

        /* Return Response */
        $response = array(
			'message' 		=> 'The medication has been successfully added',
			'data'			=> $medication->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
 	}

	/**
	 * Return a specific medication for a user
	 *
	 * @link api/v1/medications/{id}	GET
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	

		$medication = Medication::where('user_id',Auth::user()->id)->findOrFail($id);

		/* Return Response */
        $response = array(
			'message' 		=> 'The medication has been successfully added',
			'data'			=> $medication->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

	/**
	 * Update medication in storage.
	 *
	 * @link api/v1/medications/{id}	PUT
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
            'name'               => 'required',
            'dosage'             => 'required',
            'requirements'       => '',
            'notes'				 => ''
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
        	return $validator->messages();
        } 

        /* Add new medication */ 
       	$medication = Medication::where('user_id',Auth::user()->id)->findOrFail($id);
       	$medication->fill(Input::only(array_keys($rules))); // fill valid data only
        $medication->save();

        /* Return Response */
        $response = array(
			'message' 		=> 'The medication has been successfully updated',
			'data'			=> $medication->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

	/**
	 * Remove the medication from storage.
	 *
	 * @link api/v1/medications/{id}	DELETE
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$medication = Medication::where('user_id',Auth::user()->id)->findOrFail($id);
		$medication->delete();

		/* Return Response */
        $response = array(
			'message' 		=> 'The medication has been been deleted',
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

}
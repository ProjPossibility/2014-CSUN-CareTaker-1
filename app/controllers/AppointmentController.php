<?php

class AppointmentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$response = array('data' => Appointment::all()->toArray());

    	return Response::make($response, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$rules = array(
			'name' 					=> 'required',
			'location'				=> 'required',
			'appointment_datetime'	=> 'required'
		);

		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{	
			/* Return Response */
	        $response = array(
				'message' 		=> 'The appointment could not be added',
				'data'			=> $validation->messages()->toArray(),
				'status' 	 	=> 400       
			);
			return Response::make($response, 400);
		} 
		else
		{
	        /* Add new appointment */ 
	        $appointment = new Appointment();
			$appointment->fill(Input::only(array_keys($rules))); // fill valid data only
			$appointment->user_id = Auth::user()->id;
	        $appointment->save();

			$response = array(
				'description' 	=> 'The appointment was successfully created.',
				'data' 		  	=> $appointment->toArray(),
			);

			return Response::make($response, 200);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$response = array('data' => Appointment::findOrFail($id)->toArray());

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
		$appointment = Appointment::findOrFail($id);
		if ($appointment->user_id != Auth::user()->id) return;

		$appointment->done = !$appointment->done;
		$appointment->save();

		$response = array(
			'description' => 'The appointment was successfully updated.'
		);

		return Response::make($response, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$appointment = Appointment::where('user_id', Auth::user()->id)->findOrFail($id);
		$appointment->delete();
	}

}
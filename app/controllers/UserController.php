<?php

class UserController extends \BaseController {

	public function __construct()
	{
		// $this->beforeFilter('auth');
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
	 * @todo generate random password for contact users
	 * @return Response
	 */
	public function store()
	{
		$userdata = Input::all();

        $rules = array(
            'first_name'            => 'required|alpha',
            'last_name'             => 'required|alpha',
            'email'                 => 'required|email|unique:users',
            'password'              => 'confirmed',
            'password_confirmation' => ''
        );

        $validator = Validator::make($userdata, $rules);

        if ($validator->fails())
        {
            $response = array(
				'message' 		=> 'The user could not need added',
				'data'			=> $validator->messages()->toArray(),
				'status' 	 	=> 400       
			);
			return Response::make($response, 400);
		}

        $user = new User();
        $user->fill(Input::except('_token', 'password_confirmation'));
        $userdata['password'] = (isset($userdata['password']))?$userdata['password']:"password";
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

	/**
	 * Show user's notifications
	 *
	 * @link api/v1/users/{id}/notifications	GET
	 * @param  int  $id
	 * @return Response
	 */
	public function getNotifications($id)
	{	
		$data = User::
			with(array('notifications.severity','notifications.notificationtype'))
			->findOrFail($id);

		/* Return Response */
        $response = array(
			'message' 		=> 'The user notifications successfully found',
			'data'			=> $data->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

	/**
	 * Generate a user's notifications
	 *
	 * @link api/v1/users/{id}/generate-notifications	GET
	 * @param  int  $id
	 * @return Response
	 */
	public function generateNotifications($id)
	{	
		DB::table('notifications')->where('user_id',$id)->delete();
		
		/* Generate Appointments Reminders */
		$appointments = Appointment::all();

		foreach($appointments as $appt) {
			$message = "You have an appoint on ____";
			$notification = new Notification();
			$notification->title = "Appointment";
			$notification->notification = $message;
			$notification->user_id = $id;
			$notification->severity_id = 3;
			$notification->resources_type_id = 3;
			$notification->resource_id = $appt->id;
			$notification->save();
		}

  		/* Generate Medication Reminders */

  		/* Reminder all active notrications */ 
  		$notifications = Notification::
			with(array('severity','notificationtype'))
			->where("user_id",$id)
			->where("is_active",true)
			->get();

		return $notifications;

	}

}
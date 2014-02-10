<?php

class NotificationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$notifications = Notification::
			with(array('severity','notificationtype'))
			->where("user_id",Auth::user()->id)
			->where("is_active",true)
			->get();

	    $response = array(
			'message' 		=> 'The notifications have been successfully found',
			'data'			=> $notifications->toArray(),
			'status' 	 	=> 200       
		);
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
			'title' 					=> 'required',
			'notification' 		=> 'required',
			'severity_id' 			=> 'required',
			'resources_type_id'  => 'required'
		);

		$validator = Validator::make($input, $rules);
		if($validator->fails())
		{
			return $validator->messages();
		}


		/* All all weather notifications for current user */ 
		$weatherNotifications = Notification::
			where("user_id", Auth::user()->id)
		   ->where('resources_type_id', 2)
		   ->get();

		foreach($weatherNotifications as $weatherNotification){
			$weatherNotification->delete();
		}

		/* add new notification */


		$notification = new Notification();
		$notification->user_id = Auth::user()->id;
		$notification->title = $input['title'];
		$notification->notification = $input['notification'];
		$notification->severity_id = $input['severity_id'];
		$notification->resources_type_id = $input['resources_type_id'];

		$notification->save();

		$notification = Notification::
			with(array('severity', 'notificationtype'))
			->where("user_id",Auth::user()->id)
			->where("is_active",true)
			->findOrFail($notification->id);

		$response = array(
			'message' => 'The notification has successfully been added',
			'data'    => $notification->toArray(),
			'status'  => 200
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
		$notification = Notification::
			with(array('severity', 'notificationtype'))
			->where("user_id",Auth::user()->id)
			->where("is_active",true)
			->findOrFail($id);


	    $response = array(
			'message' 		=> 'The notification has been successfully found',
			'data'			=> $notification->toArray(),
			'status' 	 	=> 200       
		);
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
		//PUT

		$rules = array(
			'title' 					=> '',
			'notification' 		=> '',
			'severity_id' 			=> '',
			'resources_type_id'  => '',
			'is_active'				=> ''
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			return $validator->messages();
		} 

		/* Add new notification */ 
		$notification = Notification::where('user_id',Auth::user()->id)->findOrFail($id);
		$notification->fill(Input::only(array_keys($rules))); // fill valid data only
		$notification->save();

		/* Return Response */
		$response = array(
			'message' 		=> 'The notification has been successfully updated',
			'data'			=> $notification->toArray(),
			'status' 	 	=> 200       
		);

		return Response::make($response, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)//check if this works
	{
		//DELETE
		$notification = Notification::
			with(array('severity', 'notificationtype'))
			->where("user_id",Auth::user()->id)
			->findOrFail($id);

		$notification->delete();

		/* Return Response */
        $response = array(
			'message' 		=> 'The notification has been been deleted',
			'status' 	 	=> 200       
		);
		return Response::make($response, 200);
	}

}
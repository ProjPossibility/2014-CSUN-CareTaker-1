<?php

class HomeController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth', array('on' => 'get'));
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function getIndex()
	{
		return View::make('index');
	}

	public function getLogout()
	{
		Log::info(Auth::user()->email . ' has signed out.');

		Session::flush(); 
		Auth::logout();

		return Redirect::to('login')->with('has-signed-out', true);
	}

	public function getUserInfo()
	{
		$response = array('data' => User::find(Auth::user()->id)->toArray());
		
		return Response::make($response, 200);
	}

}
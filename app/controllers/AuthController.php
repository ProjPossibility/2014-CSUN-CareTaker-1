<?php

class AuthController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function getLogin()
    {
        return View::make('auth.login');
    }

    public function getRegister()
    {
        return View::make('auth.register');
    }

    public function postLogin()
    {
        $userdata = array(
            'email'      => Input::get('email'),
            'password'   => Input::get('password')
        );
    
        $rules = array(
            'email'      => 'required|email',
            'password'   => 'required'
        );

        $validator = Validator::make($userdata, $rules);

        if ($validator->fails())
        {
            return Redirect::action('AuthController@getLogin')
                ->withInput()
                ->withErrors($validator);
        }
        else
        {
            if (Auth::attempt($userdata))
            {
                Log::info($userdata['email'] . ' has signed in.');
                return Redirect::action('HomeController@getIndex');
            } 
            else
            {
                return Redirect::action('AuthController@getLogin')
                    ->withInput()
                    ->with('password-error', true);
            }
        }
    }
    
    public function postRegister()
    {
        $userdata = Input::all();
    
        $rules = array(
            'first_name'            => 'required|alpha',
            'last_name'             => 'required|alpha',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
        );

        $validator = Validator::make($userdata, $rules);

        if ($validator->fails())
        {
            return Redirect::action('AuthController@getRegister')
                ->withInput()
                ->withErrors($validator);
        } 
        else 
        {
            $user = new User();
            $user->fill(Input::except('_token', 'password_confirmation'));
            $user->password = Hash::make($userdata['password']);
            $user->opt_in = 1;
            $user->save();

            Log::info('New user: ' . $userdata['email']);

            Auth::attempt(Input::only('email', 'password'));
        }

        return Redirect::to('/');
    }

}
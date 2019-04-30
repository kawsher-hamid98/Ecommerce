<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Validator;
use Auth;
use Redirect;

class userController extends Controller
{
    
    public function userLoginView() 
    {
    	return view('user_login');
    }

    public function userLoginStore()
    {
    	 $data = Input::except(array('_token'));

            $rule = array(
                'email'     => 'required|email',
                'password'  => 'required',
            );

            $validator = Validator::make($data, $rule);

            if($validator->fails()) {

                return redirect() -> back() ->withErrors($validator);
            } else {

            $logindata = array(

                'email'    => Input::get('email'),
                'password' => Input::get('password'),
            );

            if(Auth::attempt($logindata)) {

                return Redirect::to('');
            } else {
                return redirect() -> back() -> with('loginError', 'Login atemption failed! please try again!');
            }
        }
    }

    public function userSignupView()
    {
    	return view('user_signup');
    }

    public function userSignupStore()
    {
    	$data   = Input::except(array('_token'));

    	$rules  = array(

    		'FirstName' => 'required|max:15|min:3',
    		'LastName'  => 'required|max:15|min:3',
    		'email'     => 'required|email',
    		'password'  => 'required|max:30|min:6',
    		'cpassword' => 'required|same:password',
    	);

    	$message = array(

    		'cpassword.required' => 'Password confirmation must required',
    		'cpassword.same'     => 'Password does not match',
    	);

    	$validator = Validator::make($data, $rules, $message);

    	if($validator -> fails()) {

    		return redirect() -> back() -> withErrors($validator);
    	} else {

    		User::form_store(Input::except(array('_token', 'cpassword')));

    		$userdata = array(

    			'email'    => Input::get('email'),
    			'password' => Input::get('password'),
    		);

    		if(Auth::attempt($userdata)) {
    			return redirect('/') -> with('success', 'successfully logged in');
    		}
    	}
    }

    
}

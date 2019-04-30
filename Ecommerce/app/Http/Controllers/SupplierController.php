<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Validator;
use Auth;
use Redirect;

class SupplierController extends Controller
{

	public function __construct() {
		$this -> middleware('guest:supplier');
	}
    
    public function supplierLoginView() 
    {
    	return view('supplier_login');
    }

    public function supplierLoginStore() 
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

            if(Auth::guard('supplier') -> attempt($logindata)) {

                return Redirect::to('');
            } else {
                return redirect() -> back() -> with('loginError', 'Login atemption failed! please try again!');
            }
        }
    }

}

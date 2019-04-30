<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;

class MainController extends Controller
{
    
    public function logout()
    {

	    	if(Auth::guard('web')){

		  	Auth::logout();
		  	Session::flush();
		  	return redirect('/');

    	} else if(Auth::guard('supplier')) {

			  	Auth::logout();
			  	Session::flush();
			  	return redirect('/');
		}
	}
}

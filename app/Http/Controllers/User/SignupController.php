<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SignupController extends Controller
{

  public function showRegistrationForm()
  {
	if (Auth::guard('web_user')->guest()){
    	return view('user.signup');
	}
    else{
    	return view('/');    	
    }

  }
}

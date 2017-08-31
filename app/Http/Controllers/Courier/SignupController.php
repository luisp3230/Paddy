<?php

namespace App\Http\Controllers\Courier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Place;

class SignupController extends Controller
{
  var $places;

  public function showRegistrationForm()
  {
      $places = Place::all();
      return view('courier.signup')->with('places', $places);
  }
}

<?php
namespace App\Http\Controllers\User;

require_once('../config.php');

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChargeController extends Controller
{

	public function charge(Request $request){

	  $token  = $_POST['stripeToken'];

	  $customer = \Stripe\Customer::create(array(
	      'email' => 'customer@example.com',
	      'source'  => $token
	  ));

	  $charge = \Stripe\Charge::create(array(
	      'customer' => $customer->id,
	      'amount'   => 5000,
	      'currency' => 'usd'
	  ));

	  echo '<h1>Successfully charged $50.00!</h1>';
	}
}

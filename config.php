<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_VZkh5oSEHrDZ1WMD84JljzoD",
  "publishable_key" => "pk_test_Cs2NTcMpBpJOKxriUtXLinXJ"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
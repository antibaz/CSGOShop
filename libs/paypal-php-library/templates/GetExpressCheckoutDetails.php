<?php
// Include required library files.
require_once('../includes/config.php');
require_once('../autoload.php');

// Create PayPal object.
$PayPalConfig = array(
					'Sandbox' => $sandbox,
					'APIUsername' => $api_username,
					'APIPassword' => $api_password,
					'APISignature' => $api_signature
					);

$PayPal = new angelleye\PayPal\PayPal($PayPalConfig);

// Pass data into class for processing with PayPal and load the response array into $PayPalResult
$Token = '';
$PayPalResult = $PayPal->GetExpressCheckoutDetails($Token);

$PhoneNumber = $PayPalResult['PHONENUM'];

// Write the contents of the response array to the screen for demo purposes.
echo '<pre />';
print_r($PayPalResult);
?>
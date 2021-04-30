<?php
	// Account details

class sms
{

	public function sendotp($contactno,$otp)
	{
	
	$apiKey = urlencode('vByvGbxYCdU-EmHGAytM5eaIVxH2ezM6eM6CCMUYWu');
	
	// Message details
	$numbers = array($contactno);
	$sender = urlencode('TXTLCL');

	$message = rawurlencode('Your OTP For Health City '.$otp);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/otp_send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	/*echo $response;*/
}
}
?>
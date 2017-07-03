<?php
function GetToken(){
	$header = array(
	"Authorization: Basic dmtDNHhMRHI1WFVZSVNIS0J2dXNxZHZMeUxvVDpqYXp6YW5rYW4=",		
	);
	$url = "https://soder.iii.com:443/iii/sierra-api/v3/token";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	$callResponse = curl_exec($ch);
	$callResponse = json_decode($callResponse,$assoc=true);
	
	//$curl_errno = curl_errno($ch);
	//$curl_error = curl_error($ch);
	curl_close($ch);
	//var_dump($callResponse);
	$key = "access_token";
	$callResponseString = $callResponse[$key];
	return $callResponseString;
	
};

    function GetPatron($code){
	$token = GetToken();
	$header = array(
	"Authorization: Bearer ".$token,		
	);
	$url = "https://soder.iii.com:443/iii/sierra-api/v3/patrons/find?".$code."&fields=names%2Caddresses%2Cphones%2Cemails%2CuniversityId%2CpatronType%2Cbarcodes";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); //Ingår i strängen som skickas
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_POST, false);
	//curl_setopt($ch, CURLOPT_POSTFIELDS, $barcode); // SOAP request
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	$pResponse = curl_exec($ch);
	//$curl_errno = curl_errno($ch);
	//$curl_error = curl_error($ch);
	curl_close($ch);
	$pResponse = json_decode($pResponse,$assoc=true);
	return $pResponse;	
}; 
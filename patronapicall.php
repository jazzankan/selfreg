<?php
function GetToken(){
	$header = array(
	"Authorization: Basic dmtDNHhMRHI1WFVZSVNIS0J2dXNxZHZMeUxvVDpqYXp6YW5rYW4=",		
	);
	$url = "https://soder.iii.com:443/iii/sierra-api/v4/token";
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

function SearchPatron($jsonsearch){
    $token = GetToken();
    $header = array(
        "Authorization: Bearer ".$token,
        'Content-Type: application/json',
    );
    $url = "https://soder.iii.com:443/iii/sierra-api/v4/patrons/query?offset=0&limit=5";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonsearch);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $pResponse = curl_exec($ch);
    //$curl_errno = curl_errno($ch);
    //$curl_error = curl_error($ch);
    curl_close($ch);
    $pResponse = json_decode($pResponse,$assoc=true);
    return $pResponse;
};

function CreatePatron($jsondata)
{
    $token = GetToken();
    $header = array(
        "Authorization: Bearer " . $token,
        'Content-Type: application/json',
    );
    $url = "https://soder.iii.com:443/iii/sierra-api/v4/patrons/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $pResponse = curl_exec($ch);
    //$curl_errno = curl_errno($ch);
    //$curl_error = curl_error($ch);
    curl_close($ch);
    $pResponse = json_decode($pResponse, $assoc = true);
    return $pResponse;
    };

function UpdatePatron($sessionId,$json)
{
    $token = GetToken();
    $header = array(
        "Authorization: Bearer " . $token,
        'Content-Type: application/json',
    );
    $url = "https://soder.iii.com:443/iii/sierra-api/v4/patrons/$sessionId";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);    $uResponse = curl_exec($ch);
    //$curl_errno = curl_errno($ch);
    //$curl_error = curl_error($ch);
    curl_close($ch);
    $uResponse = json_decode($uResponse, $assoc = true);
    return $uResponse;
};

    //Not used
    function GetPatron($code){
	$token = GetToken();
	$header = array(
	"Authorization: Bearer ".$token
	);
	$url = "https://soder.iii.com:443/iii/sierra-api/v4/patrons/".$code."?fields=names%2Caddresses%2Cphones%2Cemails%2CuniqueIds%2CpatronType%2Cbarcodes";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	$pResponse = curl_exec($ch);
	//$curl_errno = curl_errno($ch);
	//$curl_error = curl_error($ch);
	curl_close($ch);
	$pResponse = json_decode($pResponse,$assoc=true);
	return $pResponse;	
}; 
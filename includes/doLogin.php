<?php
session_start();
if(!isset($_SESSION['userName']))
{

$userName=$_POST['userName'];
$password=$_POST['password'];

//$userName="zacmoody@yopmail.com";
//$password="1:wsystem";

if ($userName!="") {
$data = '{ "username" : "'.$userName.'", "password" : "'.$password.'" }';
$fields = array(
	'data' => urlencode($data)
);
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');
//print_r($fields_string);
login($fields_string);
}

}

function login($data) {

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://mobileapi.freshdirect.com/mobileapi/v/1/saptest12@freshdirect.com/login/");
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Connection: keep-alive',
			'Pragma: no-cache',
			'Cache-Control: no-cache',
			'Accept: text/html, */*; q=0.01',
			'Origin: https://mobileapi.freshdirect.com',
			'X-Requested-With: XMLHttpRequest',
			'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36',
			'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
			'Accept-Language: en-US,en;q=0.8'
		       ));
		$data = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($data);
//		print_r($result);

	if($result->{"status"}=="SUCCESS") {

		$_SESSION['firstName']=$result->{"firstName"};
		$_SESSION['lastName']=$result->{"lastName"};
		$_SESSION['userName']=$result->{"username"};
	}
	else $_SESSION['message'] = "Login failed!!!";

	
}



?>


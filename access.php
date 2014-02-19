<?php
// require guzzle...
include 'narnoo/http/WebClient.php';
include 'narnoo/authenticate.php';

$api_settings = array(
	"API-KEY: 8WMVJYd5TF53o0xYZ2",
	"API-SECRET-KEY: MbG393WXRn75anUFuxgsw63G78ojI3lI"
);


$http_request = new Authenticate($api_settings);
$response = $http_request->access("8WMVJYd5TF53o0xYZ2","MbG393WXRn75anUFuxgsw63G78ojI3lI");
print_r($response);

?>

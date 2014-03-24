<?php
// require guzzle...
include 'narnoo/http/WebClient.php';
include 'narnoo/authenticate.php';

$api_settings = array(
	"API-KEY: { ACCESS KEYS }",
	"API-SECRET-KEY: { SECRET KEYS }"
);


$http_request = new Authenticate($api_settings);
$response = $http_request->access("{ ACCESS KEYS }","{ SECRET KEYS }");
print_r($response);

?>

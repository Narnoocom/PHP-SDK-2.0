<?php
// require guzzle...
include 'narnoo/http/WebClient.php';
include 'narnoo/authenticate.php';

$api_settings = array(
	"API-KEY: { access-key }",
	"API-SECRET-KEY: { secret-key }"
);


$http_request = new Authenticate($api_settings);
$response = $http_request->access("{ access-key }","{ secret-key }");
print_r($response);

?>

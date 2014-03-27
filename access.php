<?php
// require guzzle...
include 'narnoo/http/WebClient.php';
include 'narnoo/authenticate.php';

$api_settings = array(
	"API-KEY:{ Access key }",
	"API-SECRET-KEY:{ Secret Key }"
);


$http_request = new Authenticate($api_settings);
$response = $http_request->access("{ Access key }","{ Secret Key }");
print_r($response);

?>

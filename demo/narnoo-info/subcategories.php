<?php
include '../../narnoo/http/WebClient.php';
include '../../narnoo/categories.php';

$api_settings = array(
	"API-KEY: 8WMVJYd5TF53o0xHTS",
	"API-SECRET-KEY: MbG393WXRn75anUFuxgsw63G78ojI4rt",
        "Authorization: c5KlUYOT2PCSWu1JaX0GCF4G12jVThR97CfA1Ypp"
);


$http_request = new Category($api_settings);
$response = $http_request->getSubCategories(3); // pass a category ID
print_r($response);

?>

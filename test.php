<?php
include 'narnoo/http/WebClient.php';
include 'narnoo/operatorconnect.php';

/*$api_settings = array(
	"API-KEY: 8WMVJYd5TF53o0xYZ2",
	"API-SECRET-KEY: MbG393WXRn75anUFuxgsw63G78ojI3lI",
        "Authorization: c5KlUYOT2PCSWu1JaX0GCF4G12jVThR97CfA1Ypp"
);*/

$api_settings = array(
	"API-KEY: 8WMVJYd5TF53o0xHTS",
	"API-SECRET-KEY: MbG393WXRn75anUFuxgsw63G78ojI4rt",
        "Authorization: c5KlUYOT2PCSWu1JaX0GCF4G12jVThR97CfA1Ypp"
);

//$access_token = 'tnjRbAAaicKE1Wox6KM2ay1VIFvgdU4zvyJejes9';


$http_request = new Operatorconnect($api_settings);
$response = $http_request->getImages(39);
print_r($response);

?>

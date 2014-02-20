<?php
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$api_settings = array(
	"API-KEY: 8WMVJYd5TF53o0xHTS",
	"API-SECRET-KEY: MbG393WXRn75anUFuxgsw63G78ojI4rt",
        "Authorization: c5KlUYOT2PCSWu1JaX0GCF4G12jVThR97CfA1Ypp"
);


$http_request = new Operatorconnect($api_settings);
$response = $http_request->geolocation('-16.9055538536089','145.723879276047','60'); //pass operator latitude & longitude & distance
echo '<pre>';
print_r($response);
echo '</pre>';
?>

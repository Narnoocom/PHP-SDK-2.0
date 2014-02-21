<?php
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$api_settings = array(
	"API-KEY: 8WMVJYd5TF53o0xHTS",
	"API-SECRET-KEY: MbG393WXRn75anUFuxgsw63G78ojI4rt",
        "Authorization: c5KlUYOT2PCSWu1JaX0GCF4G12jVThR97CfA1Ypp"
);


$http_request = new Operatorconnect($api_settings);
$response = $http_request->albumRemoveImage(39,3,1360); //pass operator ID & album name
echo '<pre>';
print_r($response);
echo '</pre>';
?>

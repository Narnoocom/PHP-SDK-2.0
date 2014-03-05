<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$http_request = new Operatorconnect($api_settings);
$response = $http_request->albumAddImage(39,3,1360); //pass operator ID & album name
echo '<pre>';
print_r($response);
echo '</pre>';
?>

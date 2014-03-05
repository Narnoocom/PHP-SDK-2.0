<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$http_request = new Operatorconnect($api_settings);
$response = $http_request->albumDelete(39,61); //pass operator ID & album name
echo '<pre>';
print_r($response);
echo '</pre>';
?>

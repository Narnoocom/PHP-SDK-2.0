<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$http_request = new Operatorconnect($api_settings);
$response = $http_request->deleteDescription(39,46); //pass operator ID & album name
echo '<pre>';
print_r($response);
echo '</pre>';
?>

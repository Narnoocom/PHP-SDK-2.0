<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$http_request = new Operatorconnect($api_settings);
$response = $http_request->geoSearch('-16.9256','145.7753','60','Service'); //pass operator latitude & longitude & distance
echo '<pre>';
print_r($response);
echo '</pre>';
?>

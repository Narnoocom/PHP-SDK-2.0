<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$filepath = "";

$http_request = new Operatorconnect($api_settings);
$response = $http_request->uploadBrochure('39',$filepath); //pass operator latitude & longitude & distance
echo '<pre>';
print_r($response);
echo '</pre>';
?>

<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$opId="39";
$imageId="";

$http_request = new Operatorconnect($api_settings);
$response = $http_request->getSingleImage($opId,$imageId); //pass operator ID
echo '<pre>';
print_r($response);
echo '</pre>';
?>

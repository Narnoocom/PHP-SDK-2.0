<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';

$filepath = ""; //file path
$http_request = new Distributor($api_settings);
$response = $http_request->uploadbrochure($filepath);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

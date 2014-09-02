<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';

$vid =1;

$http_request = new Distributor($api_settings);
$response = $http_request->downloadVideo($vid);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

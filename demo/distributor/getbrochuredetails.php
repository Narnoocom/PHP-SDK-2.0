<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$broId='1';

$http_request = new Distributor($api_settings);
$response = $http_request->getBrochureDetails($broId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

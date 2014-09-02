<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';

$brochureId = ""; //file path
$http_request = new Distributor($api_settings);
$response = $http_request->deleteBrochure($brochureId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

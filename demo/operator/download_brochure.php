<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$brochureId = "";


$http_request = new Operator($api_settings);
$response = $http_request->download_brochure_get($brochureId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

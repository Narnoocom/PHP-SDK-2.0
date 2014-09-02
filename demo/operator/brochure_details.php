<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$brochureId = "" ; //album name

$http_request = new Operator($api_settings);
$response = $http_request->brochure_details($brochureId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

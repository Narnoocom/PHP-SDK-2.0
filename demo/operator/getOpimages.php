<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$imageId = "1";

$http_request = new Operator($api_settings);
$response = $http_request->getOpImages($imageId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

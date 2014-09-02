<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$imageid = "";


$http_request = new Operator($api_settings);
$response = $http_request->download_image_get($imageid);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

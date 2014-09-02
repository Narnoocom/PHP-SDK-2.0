<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$descriptionId  = "";

$http_request = new Operator($api_settings);
$response = $http_request->getDescriptionText($descriptionId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

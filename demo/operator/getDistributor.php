<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$http_request = new Operator($api_settings);
$response = $http_request->getDistributor();
echo '<pre>';
print_r($response);
echo '</pre>';

?>

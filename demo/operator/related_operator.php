<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';


$http_request = new Operator($api_settings);
$response = $http_request->related_operator_get();
echo '<pre>';
print_r($response);
echo '</pre>';

?>

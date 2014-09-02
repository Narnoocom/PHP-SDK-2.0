<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';


$http_request = new Operatorconnect($api_settings);
$response = $http_request->related_operator_get('39'); //pass operator latitude & longitude & distance
echo '<pre>';
print_r($response);
echo '</pre>';
?>

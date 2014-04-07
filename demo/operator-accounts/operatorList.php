<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatoraccounts.php';

$http_request = new Operatoraccount($api_settings);
$response = $http_request->businessList();
echo '<pre>';
print_r($response);
echo '</pre>';
?>

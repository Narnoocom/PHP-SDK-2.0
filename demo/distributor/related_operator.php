<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$op_id='39';

$http_request = new Distributor($api_settings);
$response = $http_request->related_operator_get($op_id);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

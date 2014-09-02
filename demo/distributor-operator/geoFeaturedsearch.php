<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$http_request = new Operatorconnect($api_settings);
$response = $http_request->geofeaturesearch('-16.9055538536089','145.723879276047','60'); //pass operator latitude & longitude & distance
echo '<pre>';
print_r($response);
echo '</pre>';
?>

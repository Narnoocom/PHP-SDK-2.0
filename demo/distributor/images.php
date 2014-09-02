<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';

$http_request = new Distributor($api_settings);
$response = $http_request->getImages();
echo '<pre>';
print_r($response);
echo '</pre>';

?>

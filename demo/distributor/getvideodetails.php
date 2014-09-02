<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$videoId='1';

$http_request = new Distributor($api_settings);
$response = $http_request->getVideoDetails($videoId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

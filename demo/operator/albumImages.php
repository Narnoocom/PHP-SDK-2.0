<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$albumId  = "";

$http_request = new Operator($api_settings);
$response = $http_request->getAlbumImages($albumId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

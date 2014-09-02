<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$albumId = "" ; //album id
$imageId = "" ; //image Id

$http_request = new Operator($api_settings);
$response = $http_request->album_remove_image($albumId,$imageId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

$http_request = new Operatorconnect($api_settings);
$response = $http_request->getAlbumImages(39,3); //pass operator ID
echo '<pre>';
print_r($response);
echo '</pre>';
?>

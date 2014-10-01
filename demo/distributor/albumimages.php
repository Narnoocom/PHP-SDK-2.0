<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$album_id='30';
$http_request = new Distributor($api_settings);
$response = $http_request->getAlbumImages($album_id);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

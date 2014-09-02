<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$dst_id='33';
$album_id='1';
$http_request = new Distributor($api_settings);
$response = $http_request->getAlbumImages($dst_id,$album_id);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

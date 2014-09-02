<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$dst_id='33';
$album_id='1';
$imageId='1';
$http_request = new Distributor($api_settings);
$response = $http_request->albumRemoveImage($dst_id,$album_id,$imageId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

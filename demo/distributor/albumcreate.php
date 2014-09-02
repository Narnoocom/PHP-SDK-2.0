<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$dst_id='33';
$album_name='test';
$http_request = new Distributor($api_settings);
$response = $http_request->albumCreate($dst_id,$album_name);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

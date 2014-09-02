<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$dst_id='33';
$image_id='1';

$http_request = new Distributor($api_settings);
$response = $http_request->deleteImage($dst_id,$image_id);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

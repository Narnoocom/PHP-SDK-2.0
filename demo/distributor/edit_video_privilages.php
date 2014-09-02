<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$id='1';
$setting='1';

$http_request = new Distributor($api_settings);
$response = $http_request->edit_video_privilages($id,$setting);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$videoId = ""; // image Id
$access = "" ; 

$http_request = new Operator($api_settings);
$response = $http_request->edit_video_privilege_post($videoId,$access);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

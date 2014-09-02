<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$videoid = "";


$http_request = new Operator($api_settings);
$response = $http_request->download_video_get($videoid);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

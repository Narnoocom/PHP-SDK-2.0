<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$videoId = "" ; //album name

$http_request = new Operator($api_settings);
$response = $http_request->video_details($videoId);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

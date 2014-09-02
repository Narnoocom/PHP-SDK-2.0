<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$imageId = ""; // image Id
$caption = "" ; 

$http_request = new Operator($api_settings);
$response = $http_request->edit_image_caption_post($imageId,$caption);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

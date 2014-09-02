<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$brochure_id = "";  
$caption = "" ; 

$http_request = new Operator($api_settings);
$response = $http_request->edit_brochure_caption_post($brochure_id,$caption);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

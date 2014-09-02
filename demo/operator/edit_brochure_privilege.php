<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$brochure_id = "";  
$access = "" ; 

$http_request = new Operator($api_settings);
$response = $http_request->edit_brochure_privilege_post($brochure_id,$access);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

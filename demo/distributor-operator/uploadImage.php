<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';

/**
 * 
 * Images can only be jpg|JPG|png|PNG|gif|GIF|tif|TIF
 * Images must be bigger then 800KB
 * Images must be smaller then 25MG
 * 
 * Special headers:
 * The File-Type needs to be passed over in the header
 * The File-Size needs to be passed over in the header
 * 
 * The SDK does this automatically 
 * 
 * 
 */


$http_request = new Operatorconnect($api_settings);
$file_path = realpath('../../image.jpg');
$response = $http_request->uploadImage(39,$file_path);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operator.php';

$name = "test" ; //album name

$http_request = new Operator($api_settings);
$response = $http_request->album_create($name);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

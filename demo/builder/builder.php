<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/listbuilder.php';

$http_request = new Listbuilder($api_settings);
$response = $http_request->builder(39,8,TRUE,TRUE,TRUE,TRUE,3); //pass operator TRUE for each of the neeeded items pass the number of images you want upto 10 - pass NULL if not needed - call album images if you know the album id
echo '<pre>';
print_r($response);
echo '</pre>';
?>

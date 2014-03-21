<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/listbuilder.php';

$http_request = new Listbuilder($api_settings);
// op_id = int
// image number = int( max 10 )
// brochure = true
// video = true
// description = true
// social = true
// album id = int
// brochure id = int
// video id = int
// description id = int

$response = $http_request->builder(39,8,TRUE,TRUE,NULL,TRUE,3,310,1111111265,12); //pass operator TRUE for each of the neeeded items pass the number of images you want upto 10 - pass NULL if not needed - call album images if you know the album id
echo '<pre>';
print_r($response);
echo '</pre>';
?>

<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';

$type =1;
$latitude="";
$longitude = "";
$distance = "";
$category ="Accomodation";
$subcategory ="";
$keywords  ="";
$http_request = new Distributor($api_settings);
$response = $http_request->geo_media_search($type,$latitude,$longitude,$distance,$category,$subcategory,$keywords);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

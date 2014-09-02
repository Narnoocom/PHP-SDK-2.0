<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';

$type =1;
$id="1";//media id
$catname ="Accomodation";
$subcatname ="";
$location ="";
$keywords  ="";
$prvilleges  ="";
$http_request = new Distributor($api_settings);
$response = $http_request->searchMedia($type,$id,$catname,$subcatname,$location,$keywords,$prvilleges);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

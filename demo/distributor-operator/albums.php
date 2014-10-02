<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/operatorconnect.php';
/**
 * 
 * $narnoo_id int
 * $page int default = 1 
 * 
 */

$http_request = new Operatorconnect($api_settings);
$response = $http_request->getAlbums(39);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

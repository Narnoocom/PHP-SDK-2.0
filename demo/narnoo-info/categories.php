<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/categories.php';

$http_request = new Category($api_settings);
$response = $http_request->getCategories();
echo '<pre>';
print_r($response);
echo '</pre>';
?>

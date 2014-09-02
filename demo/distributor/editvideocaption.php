<?php
include '../../narnoo/config.php';
include '../../narnoo/http/WebClient.php';
include '../../narnoo/distributor.php';
$dst_id='33';
$video_id='1';
$caption='ssssss';


$http_request = new Distributor($api_settings);
$response = $http_request->editVideoCaption($dst_id,$video_id,$caption);
echo '<pre>';
print_r($response);
echo '</pre>';

?>

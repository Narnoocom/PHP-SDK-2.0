<?php

include '../../narnoo/http/WebClient.php';

$authCode = $_GET['code'];
$state = $_GET['state'];

/*
 * username        : JamesWells
 * password        : 123456
 * app-key         : 8WMVJYd5TF53o0xYZ2
 * app-secrect-key : MbG393WXRn75anUFuxgsw63G78ojI3lI
 */
$client_id="8WMVJYd5TF53o0xYZ2";
$client_secret = "MbG393WXRn75anUFuxgsw63G78ojI3lI";
$redirect_uri = "http://localhost:8888/PHP-SDK-2.0/demo/login/client_redirect_uri.php";
$headers = array(
    "API-KEY: {$client_id}",
    "API-SECRET-KEY: {$client_secret}"
);

$httpClient = new WebClient( "http://connect.narnoo.com/oauth/accesstoken" );
/*
 *  @see http://tools.ietf.org/html/rfc6749#section-4.1.3
 *  
 *  grant_type    Value MUST be set to "authorization_code"
 *  code
 *  redirect_uri
 *  client_id
 */
$httpClient->setPost( "code={$authCode}&client_id={$client_id}&client_secret={$client_secret}&grant_type=authorization_code&redirect_uri={$redirect_uri}" );

/*
 *  query access token, and a json string will returned
 *  
 *  access_token
 *  token_type
 *  expires
 *  expires_in
 */
$response = $httpClient->getResponse( $headers );
$response = json_decode( $response,TRUE );

/*
 *  access_token
 */
$access_token = $response['access_token'];

/*
 *  ok we get the access_token and we can query details about operator
 */
$httpClient = new WebClient( "http://connect.narnoo.com/operator/account" );
/*
 *  http get
 */
$httpClient->setGet();
$response = $httpClient->getResponse( array(
    "API-KEY: {$client_id}",
    "API-SECRET-KEY: {$client_secret}",
    "Authorization: {$access_token}"
) );

$response = json_decode( $response,TRUE );

?><!doctype html>
<html>
<head>
    <title>login with narnoo</title>
    <style type="text/css"></style>
</head>
<body>

<?php var_dump($response); ?>

<p>
    page can be redirected again here to client index page or other page by using javascript
</p>

<script type="text/javascript">

</script>

</body>
</html>

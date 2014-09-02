<?php
$client_id = "{Access-Key}";
$state = "login";
/*
 *   redirect_uri must be absolute uri
 */
$redirect_uri = urlencode("http://localhost:8888/PHP-SDK-2.0/demo/login/client_redirect_uri.php");
/*
 *   response_type should be code
 */
$response_type = "code";
/*
 *   login_uri must be absolute uri
 */
$login_uri = "http://connect.narnoo.com/member/login?client_id={$client_id}&state={$state}&redirect_uri={$redirect_uri}&response_type={$response_type}";
?>
<html>
    <head>
        <title>Login With Narnoo</title>
    </head>
    <body>
        <a href="<?php echo $login_uri ?>" class="btn btn-primary btn-lg" role="button">Login With Narnoo</a>
    </body>
</html>

<?php

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$CONSUMER_KEY = 'Eqkj7HpYTMLGdu9AEK1jWEYiX';
$CONSUMER_SECRET = 'U07Ckf7sVYdzjBUJ8MrdFTcRNV97isVvZ5DleS6qF1ZJCfyhVB';

$access_token = '615092508-qBpI4tQ9WUN1chpUvyRaft0vVvVIvdfE1UWrOAyW';
$access_token_secret = 'jAOSQtepuiOIwr63cjS0xxtvNiQzxu4tZfYTjcFZRP7Cr';

$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);
$connection->host = "https://api.twitter.com/1.1/";
$connection->ssl_verifypeer = TRUE;
$connection->content_type = 'application/x-www-form-urlencoded';

$content = $connection->get("account/verify_credentials");


/*
session_start();

$to = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET);

$tok = $to->getRequestToken('https://api.twitter.com/oauth/request_token');

$token = $tok['oauth_token'];
$secret = $tok['oauth_token_secret'];

//save tokens to session
$_SESSION['ttok'] = $token;
$_SESSION['tsec'] = $secret;

$request_link = $to->getAuthorizeURL($token,TRUE);

header('Location: ' . $request_link);
*/

?>

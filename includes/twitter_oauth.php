<?php
require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$CONSUMER_KEY = 'Eqkj7HpYTMLGdu9AEK1jWEYiX';
$CONSUMER_SECRET = 'U07Ckf7sVYdzjBUJ8MrdFTcRNV97isVvZ5DleS6qF1ZJCfyhVB';

$access_token = '615092508-qBpI4tQ9WUN1chpUvyRaft0vVvVIvdfE1UWrOAyW';
$access_token_secret = 'jAOSQtepuiOIwr63cjS0xxtvNiQzxu4tZfYTjcFZRP7Cr';

$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$url = $connection->url("oauth/authorize", ["oauth_token" => $access_token]);
?>
<?php

use Abraham\TwitterOAuth\TwitterOAuth;
require "twitteroauth-master/autoload.php";

error_reporting(0);
//keys and tokens
$consumer_key = "U5pscrMxZHsN6hLJRXZAk3VJe";
$consumer_secret = "oW2f4TaJpMa4FcGsrjFoCNvv4x4mnrJByIlb7QQMWQSqPY7eJY";
$access_token = "1116312941639266305-EgIpJsrFsjQs0awoPaymEO3bLHcbjP";
$access_token_secret = "7A4EdaOv8823ikb1cx90namX9ztA9KyqYIEATt3Gh6slp";

$connection = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
$content = $connection->get(account/verify_credentials);
//print("connection Successful");
//$connection = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
print_r($statuses);
?>
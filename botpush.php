<?php



require "vendor/autoload.php";

$access_token = 'pD9O8KOQ9ZyPLuRTGJ2hNqgAXjRf3701Xxuxpv974cufmEJvgpRjJdo1zyABFsBwn0wDE1oh+m1Pb78jzc3uRkJbhHvjVM4mI9US1uRLUGd4GZcHzKk631K/bBFO1ZO/+B5cBidnNKIcvkjbW/7OJgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bfa7391654f98b45b26929b39afdeb63';

$pushID = 'U8ce30dfdaaa66aeda897463c4e93a039';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








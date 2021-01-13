<?php



require "vendor/autoload.php";

$access_token = 'NO6JVnhvX6CqofGEHiqE2dA541+6L01Nk2+vpEjGUwSNYa6o52DmZWfDgQj8Ceybn0wDE1oh+m1Pb78jzc3uRkJbhHvjVM4mI9US1uRLUGf+xwmxy7xsqJchK9MxiPgo/wD+282c6W5dbYpxvBmF3QdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bfa7391654f98b45b26929b39afdeb63';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








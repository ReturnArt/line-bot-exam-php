<?php



require "vendor/autoload.php";

$access_token = 'Kes8azacx5hMOHZTM17UIwqgAxln4Yx/pPTdlMVhPSSdZqI6D8lgWkrmIkab88E87iwsEo2nj2XqrSIUe1MY27tuO8VIzgHpVK7KFnga34JGXUkRlN8+8lNxPVSC8pvs7PYU4pkG7HLqhyC0ohAcnwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '256b5ce16f6cd3331469c4acd005b309','U8af1fc926817b0bf74f8b4c2167637a9';

// $pushID = 'U8af1fc926817b0bf74f8b4c2167637a9';
$pushID = array('U8af1fc926817b0bf74f8b4c2167637a9',);

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

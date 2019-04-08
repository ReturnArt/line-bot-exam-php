<?php



require "vendor/autoload.php";

$access_token = 'Kes8azacx5hMOHZTM17UIwqgAxln4Yx/pPTdlMVhPSSdZqI6D8lgWkrmIkab88E87iwsEo2nj2XqrSIUe1MY27tuO8VIzgHpVK7KFnga34JGXUkRlN8+8lNxPVSC8pvs7PYU4pkG7HLqhyC0ohAcnwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '256b5ce16f6cd3331469c4acd005b309';

$pushID = array('U8af1fc926817b0bf74f8b4c2167637a9','U33b5c5601a93bc61371de0d694242ab9','Uabcfa7134fcb6ee81807a0eac5ad7217','U74853ae9bc75c625c0a310fbfb7a3d19','U0bf6e92b05bc1e1a43ed7cdfd68ed70c','U74853ae9bc75c625c0a310fbfb7a3d19');

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Auto multicast message via api');
$response = $bot->multicast($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

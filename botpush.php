<?php



require "vendor/autoload.php";

$access_token = '5pvIaY/xLMYx4PAKqKMmwER1Yootm1emp1EVsw1OdBNpb9M5i5NCRC7hKhroOogKEFGHeWBh7cCdLpWhe9TgvjZzuF/SVRLEJErPPhxs/AtGh2nEbQkl6iQLbWd2M73FOMdIz9THBXX8BeUr91zV8gdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1a3d4a7c23c6feee827f2ae89765808f';

$pushID = ''; // user Line id

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








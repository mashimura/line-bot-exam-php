<?php
$access_token = '5pvIaY/xLMYx4PAKqKMmwER1Yootm1emp1EVsw1OdBNpb9M5i5NCRC7hKhroOogKEFGHeWBh7cCdLpWhe9TgvjZzuF/SVRLEJErPPhxs/AtGh2nEbQkl6iQLbWd2M73FOMdIz9THBXX8BeUr91zV8gdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

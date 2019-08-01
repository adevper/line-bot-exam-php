<?php



require "vendor/autoload.php";

$access_token = 'dbT/YlbWgSdq2HTmh+qvKUz19cfMHHiFjO6no7px9vt60Dtn1CAXcSXghZxxBbNBEgaJS1oQV8ebQczGg9JqbeBXgs+3AsJrAna7etOlvbl2B9VLquCtaXQHJ1mKQQZCJgHgcR/SeK191eQbTqrXjQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1e8a299be61a633d05f20ab026852f3a';

$pushID = 'U2394049070835aa09a3998e1fafeb89b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








<?php


$access_token = 'dbT/YlbWgSdq2HTmh+qvKUz19cfMHHiFjO6no7px9vt60Dtn1CAXcSXghZxxBbNBEgaJS1oQV8ebQczGg9JqbeBXgs+3AsJrAna7etOlvbl2B9VLquCtaXQHJ1mKQQZCJgHgcR/SeK191eQbTqrXjQdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;


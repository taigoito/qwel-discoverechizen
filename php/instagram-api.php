<?php

require_once(__DIR__ . '/config.php');
  
$url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=' . $access_token;

/* test
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

$data = json_decode($result, true);

print_r($data);

*/

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo @file_get_contents($url);
  exit;
}

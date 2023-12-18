<?php
$url = "https://jsonplaceholder.typicode.com/todos/1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result);
echo '<pre>';
print_r($result);


?>
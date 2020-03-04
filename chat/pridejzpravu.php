<?php
header("Content-Type: application/json");

$data = array();
$data["datum"] = Date("d.m.Y");
$data["cas"] = Date("H:i:s");
$data["test"] = "lksajdf asjkf haskjh";
$data["test2"] = 1656564;

$json = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('data.json', $json);
echo '{"status":"saved"}';

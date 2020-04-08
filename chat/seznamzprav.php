<?php
header("Content-Type: application/json");

$zpravy = array();
if (file_exists("data.json")) {
    $s = file_get_contents("data.json");
    $zpravy = json_decode($s);
}
echo json_encode($zpravy);

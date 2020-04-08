<?php
header("Content-Type: application/json");

$zpravy = array();
if (file_exists("data.json")) { //pokud soubor existuje, tak se z nej nacte seznam zprav
    $s = file_get_contents("data.json");
    $zpravy = json_decode($s);
}

$data = array();
$data["datum"] = Date("d.m.Y");
$data["cas"] = Date("H:i:s");
$data["zprava"] = "test"; //zatim natvrdo text zpravy

array_push($zpravy, $data); //pridani zpravy de seznamu zprav

$json = json_encode($zpravy, JSON_PRETTY_PRINT);
file_put_contents('data.json', $json); //

echo '{"status":"saved"}';

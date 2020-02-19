<?php
header("Content-Type: application/json");

$data = array();
$data["datum"] = Date("d.m.Y");
$data["cas"] = Date("H:i:s");
$data["denVTydnu"] = Date("N");
echo json_encode($data);

<?php
header("Content-Type: application/json");

$s = file_get_contents("data.json");
echo $s;

<?php
header("Content-Type: application/json");

$s = file_get_contents("test.txt");
echo $s;


<?php
header("Content-Type: application/json");

file_put_contents("test.txt", "bla bla bla");
echo '{"status":"saved"}';

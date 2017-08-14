<?php
header('Content-type: application/json');

$json = file_get_contents('php://input');

$json_decode = json_decode($json, true); 

$hash = password_hash( $json_decode['password'], PASSWORD_BCRYPT);

echo ($hash);

<?php

header('Content-type: application/json');

$json = file_get_contents('php://input');

$json_decode = json_decode($json, true);

$compare = password_verify( $json_decode['brut'] , $json_decode['hash'] );

echo json_encode($compare);

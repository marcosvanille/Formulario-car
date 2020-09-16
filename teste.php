<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

$nome = [];
$nome[] = $_POST;
echo json_encode($nome);
exit;


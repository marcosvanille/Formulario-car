<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');
include("conecta.php");


$query = "SELECT * from carros";

$dados = [];
$resultado = mysqli_query($conexao, $query);
while ($dado = mysqli_fetch_assoc($resultado)) {
    array_push($dados, $dado);
}


echo json_encode($dados);


//var_dump($dados);

exit();
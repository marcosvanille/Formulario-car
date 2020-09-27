<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');
include("conecta.php");

//var_dump($_GET);
//die();
$query = "select * from carros  where tipo = '{$_GET['tipo']}'" ;
//var_dump($query);
//die();
$dados = [];
$resultado = mysqli_query($conexao, $query);
while ($dado = mysqli_fetch_assoc($resultado)) {
    array_push($dados, $dado);
}
echo json_encode($dados);


exit();
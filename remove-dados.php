<?php include("conecta.php");
include("banco-formulario.php");

$id = $_POST['id'];
removeDados($conexao,$id);
header("location: lista.php?removido=true");
die();
?>



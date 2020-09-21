<?php include("conecta.php");
include("funçoes-formulario.php");

$id = $_POST['id'];
removeDado($conexao,$id);
header("location: lista.php?removido=true");
die();
?>



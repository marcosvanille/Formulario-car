<?php include("conecta.php");
include("banco-formulario.php");

$nome = [];
$nome = $_POST;
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$tipo = $_POST['tipo'];
$preco = $_POST['preço'];
$carros = $_POST['carros'];

if (alteraDados($conexao,$id, $nome, $email, $telefone, $endereco, $cidade, $tipo, $preco, $carros)) {
    echo "Alterado com Sucesso!!";
} else {
    echo "Nao Alterado";
}

?>



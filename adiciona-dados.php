<?php include("conecta.php");
include("banco-formulario.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$tipo = $_POST['tipo'];
$preco = $_POST['preço'];
$carros = $_POST['carros'];

if (insereDados($conexao, $nome, $email, $telefone, $endereco, $cidade, $tipo, $preco, $carros)) {
    echo "Cadastrado com Sucesso!!";
} else {
    echo "Nao Cadastrado";
}

?>



<?php

function insereProdutos($conexao, $nome, $email, $telefone, $endereco, $cidade, $tipo, $preco, $carros)
{
    $query = "INSERT INTO formulario (nome, email, telefone,endereco,cidade,tipo,preco,carros) 
    VALUES ('$nome', '$email', '$telefone','$endereco','$cidade','$tipo','$preco','$carros')";
  return  $resultadoDaInsercao = mysqli_query($conexao, $query);
}

$nome = [];
$nome = $_POST;
//var_dump($_POST);
//echo json_encode($nome);
//exit();
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$tipo = $_POST['tipo'];
$preco = $_POST['preço'];
$carros = $_POST['carros'];
$conexao = mysqli_connect('localhost', 'root', '19960709', 'bancoformulario');

if (insereProdutos($conexao, $nome, $email, $telefone, $endereco, $cidade, $tipo, $preco, $carros)) {
    echo "Conectado com Sucesso!!";
} else {
    echo "Nao Cadastrado";
}

?>



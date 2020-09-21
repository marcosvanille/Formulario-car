<?php include("conecta.php");
 include("funçoes-formulario.php");



$nome = [];
$nome = $_POST;
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$tipo = $_POST['tipo'];
$preco = $_POST['preço'];
$carros = $_POST['carros'];

if (insereProdutos($conexao, $nome, $email, $telefone, $endereco, $cidade, $tipo, $preco, $carros)) {
    echo "Conectado com Sucesso!!";
} else {
    echo "Nao Cadastrado";
}

?>



<?php

function listaProdutos($conexao)
{
    $dados = array();
    $resultado = mysqli_query($conexao, "select * from formulario");
    while ($dado = mysqli_fetch_assoc($resultado)) {
        array_push($dados ,$dado);
    }
    return $dados;
}

function insereProdutos($conexao, $nome, $email, $telefone, $endereco, $cidade, $tipo, $preco, $carros)
{
    $query = "INSERT INTO formulario (nome, email, telefone,endereco,cidade,tipo,preco,carros) 
    VALUES ('$nome', '$email', '$telefone','$endereco','$cidade','$tipo','$preco','$carros')";
    return  $resultadoDaInsercao = mysqli_query($conexao, $query);
}

function removeDado($conexao,$id){
    $query = "DELETE from formulario where id = {$id}";
    return mysqli_query($conexao,$query);
}



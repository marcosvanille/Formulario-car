<?php

function listaDados($conexao)
{
    $dados = array();
    $resultado = mysqli_query($conexao, "select * from formulario");
    while ($dado = mysqli_fetch_assoc($resultado)) {
        array_push($dados, $dado);
    }
    return $dados;
}

function insereDados($conexao, $nome, $email, $telefone, $endereco, $cidade, $tipo, $preco, $carros)
{
    $query = "INSERT INTO formulario (nome, email, telefone,endereco,cidade,tipo,preco,carros) 
    VALUES ('$nome', '$email', '$telefone','$endereco','$cidade','$tipo','$preco','$carros')";
    return $resultadoDaInsercao = mysqli_query($conexao, $query);
}

function alteraDados($conexao, $id, $nome, $email, $telefone, $endereco, $cidade, $tipo, $preco, $carros)
{
    $query = "UPDATE formulario set nome = '{$nome}' ,email = '{$email}' , telefone = {$telefone}, 
endereco = {'endereco'}, cidade = '{$cidade}', tipo = {$tipo}, preco = {$preco}, carros = {$carros} where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaDados($conexao, $id)
{
    $query = "SELECT * from formulario where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeDados($conexao, $id)
{
    $query = "DELETE from formulario where id = {$id}";
    return mysqli_query($conexao, $query);
}



<?php include("conecta.php");
include("funçoes-formulario.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style="width: 1500px">
    <table class="table table-striped">

        <thead class="thead-dark"">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
            <th scope="col">Cidade</th>
            <th scope="col">Tipo</th>
            <th scope="col">Preço</th>
            <th scope="col">Carros</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $dados = listaProdutos($conexao);
        foreach ($dados as $dado) :
        ?>
        <tr>
            <th scope="row"><?= $dado['id']?></th>
            <td><?= $dado['nome']?></td>
            <td><?= $dado['email']?></td>
            <td><?= $dado['telefone']?></td>
            <td><?= $dado['endereco']?></td>
            <td><?= $dado['cidade']?></td>
            <td><?= $dado['tipo']?></td>
            <td><?= $dado['preco']?></td>
            <td><?= $dado['carros']?></td>
        </tr>

        <?php
        endforeach
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
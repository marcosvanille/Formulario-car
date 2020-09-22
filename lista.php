<?php include("conecta.php");
include("funçoes-formulario.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lista</title>
    <link rel="stylesheet" href="oleo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<body>

<div class="container-fluid" style="width: 1500px">

    <?php
    if (array_key_exists("removido", $_GET) && $_GET["removido"] == "true") { ?>
        <p class="alert-success">Dados Apagados com Sucesso.</p>
        <?php
    }

    ?>
    <table class="table">

        <thead class="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
            <th scope="col">Cidade</th>
            <th scope="col">Tipo</th>
            <th scope="col">Preço</th>
            <th scope="col">Carros</th>
            <th scope="col">Remover</th>
            <th scope="col">Alterar Dados</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $dados = listaProdutos($conexao);
        foreach ($dados as $dado) :
            ?>
            <tr>
                <td><?= $dado['nome'] ?></td>
                <td><?= $dado['email'] ?></td>
                <td><?= $dado['telefone'] ?></td>
                <td><?= $dado['endereco'] ?></td>
                <td><?= $dado['cidade'] ?></td>
                <td><?= $dado['tipo'] ?></td>
                <td><?= $dado['preco'] ?></td>
                <td><?= $dado['carros'] ?></td>
                <td>
                    <form action="remove-dados.php" method="post">
                        <input type="hidden" name="id" value="<?= $dado['id'] ?>">
                        <button type="btn" class="btn btn-danger">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                            </svg>
                        </button>
                    </form>
                </td>
                <td><a class="btn btn-primary" href="altera-dados.php?id=<?=$dado['id']?>">Alterar</a></td>
            </tr>   

        <?php
        endforeach
        ?>

        </tbody>
    </table>
    <a href="index.html" class="btn btn-info">voltar</a>
</div>
</body>
</html>
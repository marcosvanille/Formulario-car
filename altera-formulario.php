<?php include("conecta.php");
include("banco-formulario.php");

$id = $_GET['id'];
$dados = buscaDados($conexao,$id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Troca de Óleo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="oleo.css">

</head>
<body class="bg">
<div class="container">

    <form action="altera-dados.php" method="post">
        <input type="hidden" name="id" value="<?=$dados['id']?>">
        <h1 id="titulo">Alterar Dados Cadastro</h1>
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="inputNome" class="lb">Nome Completo </label>
                <input type="text" class="form-control" id="inputNome"  name="nome"  value="<?=$dados['nome']?>" required>
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email" class="lb">Email:</label>
                <input type="email" class="form-control" onblur="validarEmail()" onfocus="redefinirMsg()" id="email" name="email" value="<?=$dados['email']?>"  />
                <span id="error-email"></span>
            </div>
            <div class="form-group col-md-3">
                <label for="inputFone" class="lb">Telefone</label>
                <input type="text" class="form-control" id="inputFone" placeholder="Telefone" name="telefone" value="<?=$dados['telefone']?>" required >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress" class="lb">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="" name="endereco" value="<?=$dados['endereco']?>">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCidade" class="lb">Cidade</label>
                <input type="text" class="form-control" id="inputCidade" name="cidade" value="<?=$dados['cidade']?>">
            </div>
        </div>

        <!--loja-->
        <div class="form-row  ">
            <div class="form-group col-md-3">
                <label for="inputTipo" class="lb">Tipo</label>
                <select id="inputTipo" class="form-control" name="tipo" onclick="tipoCar()" value="">
                    <option selected></option>
                    <option name="comum" value="comum">Comum</option>
                    <option name="confortavel" value="confortavel">Confortavel</option>
                    <option name="esportivo" value="esportivo">Esportivo</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputPreco" class="lb">Faixa de Preço</label>
                <input id="inputPreco" class="form-control" name="preço" value="<?=$dados['preço']?>">
            </div>

            <div class="form-group col-md-4">
                <label for="inputCarro" class="lb">Carros</label>
                <select id="inputCarro" class="form-control" name="carros" value="<?=$dados['carros']?>"  ></select>
            </div>

        </div>

        <button type="submit" class="btn btn-warning" >Alterar</button>
        <a href="lista.php" class="btn btn-info">voltar</a></a>
    </form>



</div>


<script src="troca-de-oleo.js"></script>
</body>
</html>

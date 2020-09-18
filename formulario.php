<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

$nome = [];
$nome = $_POST;
//var_dump($_POST);
//exit();
$nome = $_POST['nome'];
$email = $_POST['email'];
//echo json_encode($nome);


$servername = "localhost";
$database = "bancoformulario";
$username = "root";
$password = "19960709";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO formulario (nome, email, telefone,endereco,cidade,tipo,preco,carros)
VALUES ('$nome', '$email', '965545214','quadra 25','paranoa','comum','20 mil','gol')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


exit;


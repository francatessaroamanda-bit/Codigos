<?php

include_once("connection.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_criptografada = md5($senha);

$sql = "INSERT INTO usuario (nome, email, senha)
VALUES ('$nome', '$email', '$senha_criptografada')";

if(mysqli_query($conn, $sql)){
    echo "Usuario cadastrado com sucesso!";
}

else{
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
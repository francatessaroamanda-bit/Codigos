<?php


$host = 'localhost'; 
$usuario = 'root'; 
$senha = ''; 
$banco = 'login'; 

// Criar a conexão
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verificar a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>

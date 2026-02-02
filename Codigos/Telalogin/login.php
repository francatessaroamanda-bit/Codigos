<?php

// Conexão com o banco de dados
include('conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
    $data_nascimento = mysqli_real_escape_string($conexao, $_POST['data_nascimento']);

    // Consulta no banco de dados para verificar se o usuário existe
    $consulta = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha' AND cpf = '$cpf'";
    $resultado = mysqli_query($conexao, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        // Caso o usuário exista
        echo "Login bem-sucedido! Bem-vindo, $nome.";
    } else {
        // Caso o usuário não seja encontrado
        echo "Credenciais inválidas. Tente novamente.";
    }
}
?>

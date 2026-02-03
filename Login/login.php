<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="quadrado">
        <div class="lado-esquerdo"></div>
        <div class="lado-direito">
            <div class="login-form">
                <h2>Entrar</h2>

                <form action="processar.php" method="POST">
                
                <div class="input-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" placeholder="Digite seu nome completo" required>
                </div>
                
                <div class="input-group">
                    <label for="email">Endereço de E-mail</label>
                    <input type="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                
                <button type="submit" class="btn-login">Entrar</button>

            </div>
            </form>
        </div>
    </div>
</body>
</html>

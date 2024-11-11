<?php
    require_once("../BD/conexao.php");
    require_once("../Controller/senhaController.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contet="width=device-width, initial-scale=1.0">
        <title>Redefinir senha</title>

        <link rel="stylesheet" href="../CSS/Senha.css">
        <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
    
    </head>
    <body>
        <div>
        <img src="../Imagens/logo.svg" alt="logo" width=80 height=80>
        <h2>Insira nova senha</h2>

        <form method="POST" action="">
            <label for="email">Nova senha: </label>
            <input type="password" name="nova_senha" required>
            <label for="email">Confirmar nova senha: </label>
            <input type="password" name="confirmacao_nova_senha" required>
            <button class="enviar" name="redefinir" type="submit">Redefinir</button>
        </form>
        <small><a href="Login.php">Voltar para o Login?</a></small>
        </div>
    </body>
</html>
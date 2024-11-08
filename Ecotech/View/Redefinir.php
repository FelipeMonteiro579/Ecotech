<?php
    require_once("../BD/conexao.php");
    require_once("../Controller/redefinirController.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contet="width=device-width, initial-scale=1.0">
        <title>Redefinir</title>

        <link rel="stylesheet" href="../CSS/Senha.css">
        <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
    
    </head>
    <body>
        <div>
        <img src="../Imagens/logo.svg" alt="logo" width=80 height=80>
        <h2>Esqueceu à senha?</h2>

        <form method="POST" action="">
            <label for="email">E-mail: </label>
            <input type="text" name="email" required>
            <span class="erro"><?php echo $erro_email; ?></span>
            <button class="enviar" name="enviar" type="submit">Enviar</button>
        </form>
        <small><a href="Login.php">Voltar para o Login?</a></small>
        </div>
    </body>
</html>
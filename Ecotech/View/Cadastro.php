<?php include ("../Controller/cadastroController.php");?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contet="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>

        <link rel="stylesheet" href="../CSS/Cadastro.css">
        <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">

    </head>

    <body>
        <div>
        <img src="../Imagens/logo.svg" alt="logo" width=80 height=80>
        <h2>BEM-VINDO</h2>

        <form method="POST" action="">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" required>

            <label for="email">E-mail: </label>
            <input type="email" name="email" required>

            <label for="senha">Senha: </label>
            <input type="password" name="senha" required>

            <label for="csenha">Confirme a senha: </label>
            <input type="password" name="csenha" required>
            <span class="erro"><?php echo $erro_csenha; ?></span>

            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>
        <small>Já tem uma conta? <a href="Login.php">Clique aqui</a></small>
        </div>
    </body>
</html>
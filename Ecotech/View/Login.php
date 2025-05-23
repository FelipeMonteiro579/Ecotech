<?php include ("../Controller/loginController.php");?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contet="width=device-width, initial-scale=1.0">
        <title>Login</title>
        
        <link rel="stylesheet" href="../CSS/Login.css">
        <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">

    </head>

    <body>
        <div>
        <img src="../Imagens/logo.svg" alt="logo" width=80 height=80>
        <h2>BEM-VINDO DE VOLTA</h2>

        <form method="POST">
            <label for="email">E-mail: </label>
            <input type="text" name="email" required>
            <span class="erro"><?php echo $erro_email; ?></span>

            <label for="senha">Senha: </label>
            <input type="password" name="senha" required>
            <span class="erro"><?php echo $erro_senha; ?></span>
            <small class="esqueceuSenha"><a href="Redefinir.php">Esqueceu à senha?</a></small>
            
            <span class="erro"><?php echo $erro_login; ?></span>
            <button type="submit" name="entrar">Entrar</button>
        </form>
        <small class="Cadastro">Não tem uma conta? <a href="Cadastro.php">Cadastre-se aqui</a></small>
    </div>
</body>

</html>
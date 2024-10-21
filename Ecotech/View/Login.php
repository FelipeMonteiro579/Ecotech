<?php
require_once("../Controller/loginController.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" contet="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url("../Imagens/background.jpg");
            background-size: cover;
        }

        div {
            background-color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 40px;
            height: auto;
            box-sizing: border-box;
        }

        button {
            background-color: rgba(144, 207, 142, 1);
            font-family: 'Saira Condensed', sans-serif;
            display: block;
            margin: 20px auto 0;
            border: none;
            width: 50%;
            padding: 8px;
        }

        input:focus {
            border: 2px solid #007BFF;
            outline: none;
        }

        h2 {
            text-align: center;
            font-family: 'Saira Condensed', sans-serif;
        }

        input {
            width: 280px;
            height: 30px;
            margin-bottom: 15px;
        }

        label {
            font-family: 'Saira Condensed', sans-serif;
            margin-bottom: 5px;
            display: block;
        }

        img {
            display: block;
            margin: 0 auto 20px;
        }

        small {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 0.8em;
            font-family: 'Saira Condensed', sans-serif;
        }

        .erro {
            color: red;
            font-size: 13px;
            display: block;
            font-family: 'Saira Condensed', sans-serif;
        }
    </style>
</head>

<body>
    <div>
        <img src="../Imagens/logo.png" alt="logo" width=80 height=80>
        <h2>BEM-VINDO DE VOLTA</h2>

        <form method="POST">
            <label for="email">E-mail: </label>
            <input type="text" name="email" required>
            <span class="erro"><?php echo $erro_email; ?></span>

            <label for="senha">Senha: </label>
            <input type="password" name="senha" required>
            <span class="erro"><?php echo $erro_senha; ?></span>

            <span class="erro"><?php echo $erro_login; ?></span>
            <button type="submit" name="entrar">Entrar</button>
        </form>
        <small>Não tem uma conta? <a href="Cadastro.php">Cadastre-se aqui</a></small>
    </div>
</body>

</html>
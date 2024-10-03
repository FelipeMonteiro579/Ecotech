<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contet="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>

        <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
        
        <style>
            body{
                background-image: url("../Imagens/background.jpg");
                background-size: cover;
            }

            div{
                background-color: white;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 40px;
                height: auto;
                box-sizing: border-box;
            }

            button{
                background-color: rgba(144, 207, 142, 1);
                font-family: 'Saira Condensed', sans-serif;
                display: block;
                margin: 0 auto;
                border: none;
                width: 50%;
                padding: 8px;
            }

            input:focus {
            border: 2px solid #007BFF; 
            outline: none; 
            }

            h2{
                text-align: center;
                font-family: 'Saira Condensed', sans-serif;
            }

            input{
                width: 280px;
                height: 30px;
            }

            label{
                font-family: 'Saira Condensed', sans-serif;
            }
            
            img{
                display: block; 
                margin: 0 auto 20px;
            }

            small{
                display: block;
                text-align: center;
                margin-top: 10px;
                font-size: 0.8em;
                font-family: 'Saira Condensed', sans-serif;
            }

        </style>    
    </head>
    <body>
        <div>
        <img src="../Imagens/logo.png" alt="logo" width=80 height=80>
        <h2>BEM-VINDO</h2>
        <form method="POST" action="">
            <label for = "nome">Nome: </label><br>
            <input type ="text" name="nome">
            <br><br>
            <label for = "email">E-mail: </label><br>
            <input type="text" name="email">
            <br><br>
            <label for = "senha">Senha: </label><br>
            <input type="password" name="senha">
            <br><br>
            <label for = "csenha">Confirmar Senha: </label><br>
            <input type="password" name="csenha">
            <br><br>
            <button>Cadastrar</button>
        </form>
        <small>Já tem uma conta? <a href="Login.php">Clique aqui</a></small>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" contet="width=device-width, initial-scale=1.0">
    <title>TelaInicial</title>

    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <style>
        *{
            margin: auto;
            font-family: 'Saira Condensed', sans-serif;
        }

        ul{
            list-style-type: none;
            padding: 0;
            overflow: hidden;
            background-color: rgba(217, 217, 217, 1);
            position: fixed;
            top: 0;
            width: 100%;
        }

        li{
            color: black;
            float: right;
        }

        li a{
            display: block;
            color: white;
            text-align: center;
            padding: 30px;
            text-decoration: none;
        }

        li a:hover:not(.active){ /*Mostrar quando o mouse está em cima do botão e trocar a cor*/
            background-color: #c0c1bf;
        }

        #logo{
            padding-left: 50px;
            padding-top: 5px;
        }
        </style>

</head>

<body>
    <header>
        <div class="menu">
        <nav>
            <ul>
                <img id="logo" src="../Imagens/logo.png" alt="logo" width=80 height=80>
                <li><a href="#">Sair</a></li>
                <li><a href="#">Configurações</a></li>
                <li><a href="#">Dados Coletados</a></li>
                <li><a href="#">Início</a></li>
            </ul>
        </nav>
    ]</div>
    </header>
</body>
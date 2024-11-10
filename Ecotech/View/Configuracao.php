<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user'])) { 
    header("Location: ../View/Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" contet="width=device-width, initial-scale=1.0">
    <title>Configuração</title>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <?php include("../navbar/navbar.php"); ?>

</head>

<body>
    <div class="container">

        <?php
        require_once("../Controller/configuracaoController.php")
        ?>
    </div>
</body>

</html>
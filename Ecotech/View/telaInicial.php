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
    <title>TelaInicial</title>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/TelaInicial.css">
    <?php include("../navbar/navbar.php"); ?>
    
</head>

<body>
    <div class="container">
        <img id="main-logo" src="../Imagens/logo.svg" alt="logo">
        <h1>BEM-VINDO <?php echo strtoupper($_SESSION["name"]);;?></h1>
    </div>
</body>
</html>
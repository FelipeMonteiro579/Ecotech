<?php

include ("../BD/conexao.php");

$erro_email = '';

if (isset($_POST["enviar"])) {
    $email_usuario = mysqli_real_escape_string($mysqli, trim($_POST["email"]));
    $token = sha1(uniqid(mt_rand(), true));

    $sql = "SELECT * FROM Usuario WHERE email_usuario='$email_usuario'";

    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        $id_usuario = $usuario["id_usuario"];

        $sql = "INSERT INTO Token(codigo_token, id_usuario) VALUES ('$token', $id_usuario)";

        $mysqli->query($sql);

        header("Location: ../View/RedefinirSenha.php?token=".$token);
    } else {
        $erro_email = "Falha encontrada! Email incorreto ou inexistente";
    }
}
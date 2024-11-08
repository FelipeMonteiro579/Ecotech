<?php

include("../BD/conexao.php");

if (isset($_GET['token'])) {

    $codigo_token = mysqli_real_escape_string($mysqli, trim($_GET["token"]));

    $sql = "SELECT t.id_token, t.codigo_token, t.status_token, u.id_usuario FROM Token t
    INNER JOIN Usuario u ON t.id_usuario = u.id_usuario
    WHERE t.codigo_token = '$codigo_token' AND t.status_token = 'Ativo'
    AND t.data_token > NOW() - INTERVAL 1 HOUR";

    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows == 1) {
        if (isset($_POST["redefinir"])) {
            if (isset($_POST["nova_senha"]) && isset($_POST["confirmacao_nova_senha"])) {
                $nova_senha = mysqli_real_escape_string($mysqli, trim($_POST['nova_senha']));
                $confirmacao_nova_senha = mysqli_real_escape_string($mysqli, trim($_POST['confirmacao_nova_senha']));

                if ($nova_senha == $confirmacao_nova_senha) {
                    $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);

                    $row = $resultado->fetch_assoc();

                    $id_usuario = $row["id_usuario"];

                    $sql = "UPDATE Usuario SET senha_usuario='$nova_senha_hash' WHERE id_usuario=$id_usuario";

                    if ($mysqli->query($sql)) {
                        $sql_update_token = "UPDATE Token SET status_token='Inativo' WHERE codigo_token='$codigo_token'";

                        if ($mysqli->query($sql_update_token)) {
                            header("Location: ../View/Login.php");
                        }
                    }
                }
            }
        }
    } else {
        header("Location: ../View/Login.php");
    }
}

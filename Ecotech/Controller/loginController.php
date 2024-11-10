<?php
session_start();
require_once("../BD/conexao.php");

$erro_email = '';
$erro_senha = '';
$erro_login = '';

//if(isset($_POST['email']) || isset($_POST['senha'])) {
if (isset($_POST["entrar"])) {
    if (empty($_POST['email'])) {
        $erro_email = "Preencha seu email";
    } else if (empty($_POST['senha'])) {
        $erro_senha = "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            $_SESSION['user'] = $usuario['id_usuario'];
            $_SESSION['name'] = $usuario['nome_usuario'];

            if (isset($_SESSION["user"])) {
                header("Location: ../View/telaInicial.php");
            }
        } else {
            $erro_login = "Falha ao logar! Email ou Senha incorretos";
        }
    }
}
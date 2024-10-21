<?php
include ("../BD/conexao.php");

$erro_email = '';
$erro_senha = '';

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        $erro_email = "Preencha seu email";
    } else if (strlen($_POST['senha']) == 0) {
        $erro_senha = "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email_Usuario = '$email' AND senha_Usuario = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['user'] = $usuario['id_Usuario'];
            $_SESSION['name'] = $usuario['nome_Usuario'];

            header("Location: TelaInicial.php");

        } else {
            $erro_email = "Falha ao logar! Email ou Senha incorretos";
        }
    }
}
?>
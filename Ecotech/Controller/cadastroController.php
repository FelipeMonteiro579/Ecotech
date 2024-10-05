<?php
include ("../BD/conexao.php");

$erro_senha = '';
$erro_csenha = '';

if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome']) && isset($_POST['csenha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    } else if (strlen($_POST['senha']) == 0) {
        $erro_senha = "Preencha sua senha";
    } else if (strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    } else if ($_POST['senha'] != $_POST['csenha']) {
        $erro_csenha = "As senhas não coincidem!";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $nome = $mysqli->real_escape_string($_POST['nome']);

        $sql_check = "SELECT * FROM usuario WHERE email_Usuario = '$email'";
        $sql_check_query = $mysqli->query($sql_check);

        if ($sql_check_query->num_rows > 0) {
            $erro_email = "Este email já está cadastrado!";
        } else {
            $sql_code = "INSERT INTO usuario (nome_Usuario, email_Usuario, senha_Usuario) VALUES ('$nome', '$email', '$senha')";
            $sql_query = $mysqli->query($sql_code);

            if ($sql_query) {
                echo "Usuário cadastrado com sucesso!";
                header("Location: login.php");
            } else {
                echo "Erro ao cadastrar o usuário: " . $mysqli->error;
            }
        }
    }
}
?>
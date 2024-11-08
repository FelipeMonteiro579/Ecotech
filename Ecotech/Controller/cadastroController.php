<?php
require_once ("../Model/Usuario.php");
require_once ("../BD/conexao.php");

$erro_senha = '';
$erro_csenha = '';

if(isset($_POST['cadastrar'])){
    if (empty($_POST['email']) || is_null($_POST['email'])) {
        echo "Preencha seu email";
    } else if (empty($_POST['senha']) || is_null($_POST['senha'])) {
        $erro_senha = "Preencha sua senha";
    } else if (empty($_POST['nome']) || is_null($_POST['nome'])) {
        echo "Preencha seu nome";
    } else if (empty($_POST['csenha']) || is_null($_POST['csenha'])) {
        echo "Preencha seu nome";
    } else if ($_POST['senha'] != $_POST['csenha']) {
        $erro_csenha = "As senhas não coincidem!";
    } else {
        
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $usuario = new Usuario($nome, $email, $senha_hash);

        $sql_check = "SELECT * FROM usuario WHERE email_usuario = '$usuario->email_usuario'";
        $sql_check_query = $mysqli->query($sql_check);

        if ($sql_check_query->num_rows > 0) {
            $erro_email = "Este email já está cadastrado!";
        } else {

            $sql_code = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('$usuario->nome_usuario', '$usuario->email_usuario', '$usuario->senha_usuario')";
            $sql_query = $mysqli->query($sql_code);

            if ($sql_query) {
                echo "Usuário cadastrado com sucesso!";
                header("Location: ../View/login.php");
            } else {
                echo "Erro ao cadastrar o usuário: " . $mysqli->error;
            }
        }
    }
}
?>
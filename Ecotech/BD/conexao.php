<?php
$usuario = 'root';
$senha = '';
$database = 'Ecotech';
$host = 'localhost';

try {
    $mysqli = mysqli_connect($host, $usuario, $senha, $database);
    //echo "Sucesso ao tentar se conectar ao Banco de Dados $database";
} catch (mysqli_sql_exception) {
    $erro = throw new Exception("Erro ao tentar se conectar ao banco", 1);
    echo "$erro";
}

?>
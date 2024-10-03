<?php
$usuario = 'root';
$senha = '';
$database = 'ecotech';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar no banco de dados " . $mysqli->error);
}
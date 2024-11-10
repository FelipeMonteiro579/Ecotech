<?php
require_once("../BD/conexao.php");

$id_usuario = $_SESSION["user"];

$sql = "SELECT l.id_leitura, 
d.nome_dispositivo, 
l.temperatura,
l.umidade,
l.nivel_agua,
l.umidade_solo,
l.data_coleta,
u.nome_usuario
FROM Leitura l
INNER JOIN Dispositivo AS d ON l.id_dispositivo = d.id_dispositivo
INNER JOIN Usuario AS u ON d.id_usuario=u.id_usuario
WHERE u.id_usuario=$id_usuario ORDER BY l.data_coleta DESC";

$result = $mysqli->query($sql);
$mysqli->close();
?>
<?php
require_once("../BD/conexao.php");
require_once("../Model/Dispositivo.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jsonData = file_get_contents("php://input");

    $data = json_decode($jsonData, true);

    if (isset($data['id_dispositivo'], $data['nome_dispositivo'])) {
        $id_dispositivo = number_format($data['id_dispositivo']);
        $nome_dispositivo = trim($data['nome_dispositivo']);

        $dispositivo = new Dispositivo($id_dispositivo, $nome_dispositivo);

        $sql = "INSERT INTO Dispositivo(id_dispositivo, nome_dispositivo)
            SELECT * FROM (SELECT $dispositivo->id_dispositivo, '$dispositivo->nome_dispositivo') AS temp
            WHERE NOT EXISTS(SELECT id_dispositivo FROM Dispositivo WHERE id_dispositivo=$dispositivo->id_dispositivo)";

        if ($mysqli->query($sql) === TRUE) {
            echo "<br>New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
    $mysqli->close();
}

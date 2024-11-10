<?php
require_once("../BD/conexao.php");
require_once("../Model/Leitura.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jsonData = file_get_contents("php://input");

    $data = json_decode($jsonData, true);
    
    if (isset($data['temperatura'], $data['umidade'], $data['nivel_agua'], $data['umidade_solo'], $data['id_dispositivo'])) {
        $temperatura = $data['temperatura'];
        $umidade = $data['umidade'];
        $nivel_agua = $data['nivel_agua'];
        $umidade_solo = $data['umidade_solo'];
        $id_dispositivo = $data['id_dispositivo'];

        $leitura = new Leitura($temperatura, $umidade, $nivel_agua, $umidade_solo, $id_dispositivo);

        $sql = "INSERT INTO Leitura(temperatura, umidade, nivel_agua, umidade_solo, id_dispositivo) 
        VALUES ($leitura->temperatura, $leitura->umidade, $leitura->nivel_agua, $leitura->umidade_solo, $leitura->id_dispositivo)";

        if ($mysqli->query($sql) === TRUE) {
            echo "<br>New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
    $mysqli->close();

}


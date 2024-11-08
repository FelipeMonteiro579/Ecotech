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

echo "<h1>Dados coletados</h1><hr>";
if ($result->num_rows > 0) {
    
    echo '<table border="0" cellspacing="8" cellpadding="8"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">DISPOSITIVO</font> </td> 
          <td> <font face="Arial">TEMPERATURA</font> </td> 
          <td> <font face="Arial">UMIDADE</font> </td> 
          <td> <font face="Arial">NIVEL ÁGUA</font> </td> 
          <td> <font face="Arial">UMIDADE SOLO</font> </td> 
          <td> <font face="Arial">DATA</font> </td> 
          <td> <font face="Arial">USUÁRIO</font> </td> 
      </tr>';

    if ($result = $mysqli->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $id_leitura = $row["id_leitura"];
            $dispositivo = $row["nome_dispositivo"];
            $temperatura = $row["temperatura"];
            $umidade = $row["umidade"];
            $nivel_agua = $row["nivel_agua"];
            $umidade_solo = $row["umidade_solo"];
            $data_coleta = $row["data_coleta"];
            $usuario = $row["nome_usuario"];
            

            echo '<tr> 
                  <td>' . $id_leitura . '</td> 
                  <td>' . $dispositivo . '</td> 
                  <td>' . $temperatura . '</td> 
                  <td>' . $umidade . '</td> 
                  <td>' . $nivel_agua . '</td> 
                  <td>' . $umidade_solo . '</td> 
                  <td>' . $data_coleta . '</td> 
                  <td>' . $usuario . '</td> 
              </tr>';
        }

        echo '</table>';
        $result->free();

        $mysqli->close();
    }
} else {
    echo "Nenhum dado encontrado!";
}

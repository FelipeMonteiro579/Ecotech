<?php
require_once("../BD/conexao.php");

$id_usuario = $_SESSION["user"];

$sql = "SELECT * FROM Dispositivo WHERE id_usuario IS NULL";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Dispositivos não conectados</h1><hr>";
    
    echo '<table border="0" cellspacing="8" cellpadding="8"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">NOME DISPOSITIVO</font> </td> 
          <td> <font face="Arial">ID DONO</font> </td> 
          <td> <font face="Arial">CONECTAR</font> </td> 
      </tr>';

    if ($result = $mysqli->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id_dispositivo"];
            $nome = $row["nome_dispositivo"];
            $usuario = $row["id_usuario"];

            echo '<tr> 
                  <td>' . $id . '</td> 
                  <td>' . $nome . '</td> 
                  <td>' . $usuario . '</td> 
                  <td>
                    <form action="" method="post">
                        <input type="hidden" name="id_dispositivo" value="' . $id . '" />
                        <input type="submit" name="conectar" value="Conectar" />
                    </form>
                  </td> 
              </tr>';
        }

        echo '</table>';

        // Handle form submission when "Conectar" button is clicked
        if (isset($_POST["conectar"])) {
            $id_dispositivo = $_POST["id_dispositivo"];

            $sql = "SET FOREIGN_KEY_CHECKS=0";
            if ($mysqli->query($sql) === TRUE) {
                $sql_update = "UPDATE Dispositivo SET id_usuario = '$id_usuario' WHERE id_dispositivo='$id_dispositivo'";

                if ($mysqli->query($sql_update) === TRUE) {
                    echo "Dispositivo conectado com sucesso!";
                } else {
                    echo "Erro: " . $sql_update . "<br>" . $mysqli->error;
                }
            } else {
                echo "Erro: " . $sql . "<br>" . $mysqli->error;
            }

            $sql = "SET FOREIGN_KEY_CHECKS=1";
            if ($mysqli->query($sql) === TRUE) {
                echo "Ok";
            } else {
                echo "Erro: " . $sql . "<br>" . $mysqli->error;
            }
        }
        $result->free();
    }
}

$sql = "SELECT * FROM Dispositivo WHERE id_usuario=$id_usuario";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Dispositivos conectados</h1><hr>";
    
    echo '<table border="0" cellspacing="8" cellpadding="8"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">NOME DISPOSITIVO</font> </td> 
          <td> <font face="Arial">ID DONO</font> </td> 
      </tr>';

    if ($result = $mysqli->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id_dispositivo"];
            $nome = $row["nome_dispositivo"];
            $usuario = $row["id_usuario"];

            echo '<tr> 
                  <td>' . $id . '</td> 
                  <td>' . $nome . '</td> 
                  <td>' . $usuario . '</td> 
              </tr>';
        }

        echo '</table>';
        $result->free();

        $mysqli->close();
    }
}

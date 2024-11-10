<?php
session_start();

//Verificar se o usuário está logado
if (!isset($_SESSION['user'])) { 
    header("Location: ../View/Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contet="width=device-width, initial-scale=1.0">
        <title>Dispositivos</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../CSS/Dispositivos.css">
        <?php include("../navbar/navbar.php");?>

    </head>

    <body>
        <?php
            require_once("../Controller/dispositivoController.php");
        ?>
    </body>

    <body>
    <div class="container">
        <!-- Seção da esquerda: tabela -->
         <div class="esquerda">
            <table>
                <thead>
                    <tr class="tabela-topo"align="center">
                        <th width="100">ID</th>
                        <th width="100">Nome do Dispositivo</th>
                        <th width="100">Temperatura</th>
                        <th width="100">Umidade</th>
                        <th width="100">Nível de Água</th>
                        <th width="100">Umidade do Solo</th>
                        <th width="100">Data e Hora</th>
                        <th width="100">Usuário</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($row["id_leitura"]) . "</td>
                                    <td>" . htmlspecialchars($row["nome_dispositivo"]) . "</td>
                                    <td>" . htmlspecialchars($row["temperatura"]) . " ºC</td>
                                    <td>" . htmlspecialchars($row["umidade"]) . "</td>
                                    <td>" . htmlspecialchars($row["nivel_agua"]) . "</td>
                                    <td>" . htmlspecialchars($row["umidade_solo"]) . "</td>
                                    <td>" . htmlspecialchars($row["data_coleta"]) . "</td>
                                    <td>" . htmlspecialchars($row["nome_usuario"]) . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>Nenhum dado encontrado!</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Seção da direita: gráficos 
        <div class="direita">
            <div class="nivel-de-agua">
                <h3>Nível d'água</h3>
                <div class="barra-de-agua">
                    <div class="agua" id="water-bar"></div>
                </div>
            </div>

            <div class="temp-umidade">
                <h3>Gráfico de Temperatura e Umidade do Solo</h3>
                <canvas id="tempUmidGrafico"></canvas>
            </div>
        </div>
                -->
        <button class=atualizar type="submit" name="atualizar"><a href="Dispositivos.php">Atualizar</a></button>
    </div>
</body>
<html>
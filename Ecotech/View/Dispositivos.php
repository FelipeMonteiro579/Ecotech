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
        <link rel="stylesheet" href="#">
        <?php include("../navbar/navbar.php");?>

    </head>

    <body>
        <?php
            require_once("../Controller/dispositivoController.php");
        ?>
    </body>
<!--
    <body>
    <div class="container">
        <!-- Seção da esquerda: tabela -->
        <!--<div class="esquerda">
            <table>
                <thead>
                    <tr bgcolor="grey" align="center">
                        <th width="100">Data e Hora</th>
                        <th width="100">Nome do Dispositivo</th>
                        <th width="100">Temperatura</th>
                        <th width="100">Umidade do Solo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr bgcolor="lightgrey" align="center">
                        <td>Dados</td>
                        <td>Dados</td>
                        <td>Dados</td>
                        <td>Dados</td>
                    </tr>
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

    </div>
    
    <button class=adicionar type="submit" name="adicionar">Adicionar</button>

</body>
-->
<html>
<?php
$user = 'root';
$password = '';
$database = 'ecotech';
$host = 'localhost';

try {
    $conect = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = $conect->query("SHOW TABLES");
    
    echo "Conexão bem sucedida com o banco de dados.<br>";
    echo "Tabelas no Banco de Dados:<br>";
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo $row['Tables_in_ecotech'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>

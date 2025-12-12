<?php
require_once 'config.php';

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        throw new Exception("Falha de conexão: " . $conn->connect_error);
    }
    
    $conn->set_charset("utf8mb4");

} catch (Exception $e) {
    die("Erro ao conectar com o banco de dados. Por favor, tente novamente mais tarde!". $e->getMessage());
}
?>
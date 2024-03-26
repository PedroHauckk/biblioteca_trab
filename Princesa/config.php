<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados (substitua pelos seus dados)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteca";
    $PORT = "7306"

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname, $PORT);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
?>

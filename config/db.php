<?php
// Arquivo de configuração do banco de dados (db.php)
$host = "localhost";  // Host do banco de dados
$dbname = "nome_do_banco";  // Nome do banco de dados
$username = "root";  // Usuário do banco de dados
$password = "";  // Senha (padrão no XAMPP é em branco)

// Conexão PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>

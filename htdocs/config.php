
<?php
$host = "sql100.infinityfree.com";
$dbname = "if0_41621753_sistema_estoque"; 
$username = "if0_41621753";
$password = "85lEQtGZFydR";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>

<?php
include 'config.php';

// No PDO, usamos o método query() da variável $pdo
try {
    // Consulta Tabela 1
    $stmt1 = $pdo->query("SELECT * FROM Produto"); // ajuste o nome da tabela
    $resultadoProdutos = $stmt1->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Erro na consulta: " . $e->getMessage();
}
?>

<?php
// Configurações de erro para desenvolvimento
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $produto = $_POST['produto'] ?? '';
        $tipo = $_POST['tipo'] ?? '';
        $quantidade = (float)($_POST['quantidade'] ?? 0);

        if (!empty($produto) && !empty($tipo) && $quantidade > 0) {

            // 1. Busca o ID do produto pelo nome
            $stmt = $pdo->prepare("SELECT id FROM Produto WHERE nome = :nome");
            $stmt->execute([':nome' => $produto]);
            $produtoRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($produtoRow) {
                $produto_id = $produtoRow['id'];

                // 2. Registra a movimentação (incluindo o nome do produto)
                $sql = "INSERT INTO Movimentacao (produto_id, nome_produto, tipo, quantidade, data_movimentacao) 
                        VALUES (:produto_id, :nome_produto, :tipo, :quantidade, NOW())";             

                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':produto_id'   => $produto_id,
                    ':nome_produto' => $produto,
                    ':tipo'         => $tipo,
                    ':quantidade'   => $quantidade
                ]);

                // 3. Atualiza o saldo na tabela Produto (Soma ou Subtrai)
                if ($tipo === 'entrada') {
                    // Adicionamos "data_movimentacao = NOW()" para atualizar o timestamp no cadastro do produto
                    $sql_update = "UPDATE Produto SET quantidade = quantidade + :quantidade, data_movimentacao = NOW() WHERE id = :id";
                } else {
                    $sql_update = "UPDATE Produto SET quantidade = quantidade - :quantidade, data_movimentacao = NOW() WHERE id = :id";
}

                $stmt_update = $pdo->prepare($sql_update);
                $stmt_update->execute([
                    ':quantidade' => $quantidade,
                    ':id'         => $produto_id
                ]);

                echo "<h3>Sucesso!</h3>";
                echo "Movimentação de $produto registrada e estoque atualizado.<br>";
                echo '<a href="index.php">Fazer novo envio</a>';
                
            } else {
                echo "Erro: Produto '$produto' não encontrado.";
            }
        } else {
            echo "Erro: Preencha todos os campos corretamente.";
        }
    } else {
        echo "Acesse o formulário para registrar uma movimentação.";
    }

} catch (PDOException $e) {
    echo "Erro no banco de dados: " . $e->getMessage();
}
?>
<?php
session_start();
include 'config.php'; // usa sua conexão PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['nome_usuario'];
    $senha = $_POST['senha'];
    
        // Validação de e-mail
    if (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
        die("Por favor, insira um e-mail válido.");
    }

    // Busca o usuário no banco
    $sql = "SELECT * FROM usuarios WHERE nome_usuario = :usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Verifica a senha com password_verify
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['usuario'] = $row['nome_usuario'];
            header("Location: index.php"); // redireciona para a página inicial
            exit;
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}
?>

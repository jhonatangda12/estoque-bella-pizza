<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['nome_usuario'];
    $senhaHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome_usuario, senha) VALUES (:usuario, :senha)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senhaHash);
        // Validação de e-mail
    if (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
        die('Por favor, insira um e-mail válido (exemplo@gmail.com) <a href="cadastro.html">Voltar</a>');
    }
    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
        header("Location: index.php"); // redireciona para a página inicial
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>

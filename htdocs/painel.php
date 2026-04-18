<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'deshboard_2.php'; ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visualização de Dados</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        .container { width: 80%; margin: auto; }
        h3 { margin-top: 30px; color: #444; }
    </style>
</head>
<body class="page-2">
<nav class="menu-superior">
<div class="menu"><a href="#" class="button-menu"><i class="bi bi-list"></i> </a>
    <div class="dropdown-content">
        <a href="index.php">Home</a>
        <a href="painel.php">Estoque</a>
        <a href="#">Configurações</a>
      </div>
</div>
<div class="logo"><a href="index.html" class="button-home"><i class="bi bi-cup-hot-fill"></i> </a></div>
<div class="pesquisa-menu">
<div class="pesquisa"><a href="URL" class="button-pesquisa"><i class="bi bi-search"></i></a></div>
<div class="menu-left"><a href="URL" class="button-menu-raight"><i class="bi bi-three-dots"></i></a></div>
</div>
</nav>
<p></p>
<div class="container">
    <h1>Painel de Estoque</h1>

    <h3>Tabela 1: Produtos</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Data de Movimentação</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach($resultadoProdutos as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['nome']; ?></td>
            <td><?php echo $item['quantidade']; ?></td>
            <td><?php echo $item['data_movimentacao']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    </table>

</div>
<button class="button-class-entrada-saida" type="button" onclick="home()">Fazer nova movimentação<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-airplane-fill" viewbox="0 0 16 16"> <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849"></path> </svg> </button>
<script>

    function home(){
         window.location.href = "index.php";
    }
</script>
</body>
</html>
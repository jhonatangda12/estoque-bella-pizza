<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="br-pr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="script.js">
</head>
<body class="page-2">
<nav class="menu-superior">
<div class="menu"><a href="#" class="button-menu"><i class="bi bi-list"></i> </a>
    <div class="dropdown-content">
        <a href="#">Deshboard</a>
        <a href="https://estoqueonline2026.infinityfreeapp.com/painel.php">Estoque</a>
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
<form action="salvar.php" method="POST" class="entra-e-saida">
<h1>Entrada e Saída</h1>
<br /><br /><!-- Seleção de Produto --> <label for="produto">Produto:</label><select name="produto" id="produto" required="">
<option value="">-- Selecione --</option>
<option disabled="disabled" style="font-weight: bold;">Carnes</option>
<option value="File Mignon">Filé Mignon</option>
<option disabled="disabled" style="font-weight: bold;">Queijos</option>
<option value="Queijo Mussarela">Queijo Mussarela</option>
<option disabled="disabled" style="font-weight: bold;">Chocolates</option>
<option value="Chocolate Meio Amargo">Chocolate Meio Amargo</option>
<option value="Chocolate Ao Leite">Chocolate Ao Leite</option>
<option value="Chocolate Branco">Chocolate Branco</option>
<option value="Chocolate Cobertura ao Leite">Chocolate Cobertura ao Leite</option>
<option value="Chocolate Cobertura Meio Amargo">Chocolate Cobertura Meio Amargo</option>
</select><br /><!-- Tipo de Movimentação --> <label for="tipo">Tipo:</label><select name="tipo" id="tipo" required="">
<option value="entrada">Entrada</option>
<option value="saida">Saída</option>
</select><br /><!-- Quantidade --> <label for="quantidade">Quantidade:</label> <input type="number" step="0.001" name="quantidade" id="quantidade" min="0" required="" /> <br /><br /><button class="button-class-entrada-saida" type="submit">Salvar<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-airplane-fill" viewbox="0 0 16 16"> <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849"></path> </svg> </button></form>
</body>
</html>
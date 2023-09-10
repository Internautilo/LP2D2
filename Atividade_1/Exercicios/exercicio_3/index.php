<?php
ini_set('display_errors', 1);
error_reporting(1);
require_once '../inc/cabecalho.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - LP2D3</title>

</head>

<body>
    <hr class="invisible vr" style="height: 200;">

    <div class="main align-items-center justify-content-center">
        <div class="d-flex justify-content-center align-items-center">
            <h3>Exercicio 3 - Cadastro e Visualização de Produtos</h3>
        </div>
        <hr class="invisible vr" style="height: 50;">
        <div class="d-flex justify-content-center">
            <a href="./cadastrarProdutos.php" class="btn btn-rounded btn-primary btn-lg">Cadastro de Produtos</a>
        </div>
        <hr class="invisible">
        <div class="d-flex justify-content-center">
            <a href="./visualizarProdutos.php" class="btn btn-rounded btn-primary btn-lg">Listagem de Produtos</a>
        </div>
    </div>
</body>

</html>
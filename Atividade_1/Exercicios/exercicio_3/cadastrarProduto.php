<?php

require "./Produto.php";
require "./Database.php";

ini_set('display_errors', 1);
error_reporting(1);

$nome = $_POST['nome'];
$valor = $_POST['valor'];


$pdo = Database::conexao();


$stmt = $pdo->prepare("
    insert into produtos (nomeProduto, valorProduto) values(:nome, :valor);    
");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':valor', $valor);
$stmt->execute();

header("Location: cadastrarProdutos.php?sucesso=1"); exit;

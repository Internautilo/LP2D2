<?php

require "./Produto.php";

ini_set('display_errors', 1);
error_reporting(1);

session_start();
$nome = $_POST['nome'];
$valor = $_POST['valor'];

$produto = new Produto($nome, $valor);

//$produtos[] = $_SESSION['produtos'];
//$produtos += $arrProduto;
if(!is_array($_SESSION['produtos'])){
    $_SESSION['produtos'] = [];
}

$_SESSION['produtos'] += (array)$produto;

var_dump($_SESSION);

//header("Location: cadastrarProdutos.php"); exit;

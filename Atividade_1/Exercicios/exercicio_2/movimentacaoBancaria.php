<?php
require "./ContaBancaria.php";

session_start();
$conta = new ContaBancaria($_SESSION['nome'], $_SESSION['conta']);
$conta->setSaldo($_SESSION['saldo']);

if(isset($_POST['saque'])){
    if(!$conta->sacar($_POST['saque'])){
        header("Location: index.php?erro=1"); exit;
    }
}
if(isset($_POST['deposito'])){
    $conta->depositar($deposito);    
}

header("Location: index.php");
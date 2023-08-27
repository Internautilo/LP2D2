<?php
require "./ContaBancaria.php";

session_start();
$conta = new ContaBancaria($_SESSION['nome'], $_SESSION['conta']);
$conta->setSaldo($_SESSION['saldo']);


if(isset($_POST['saque'])){
    if(!$conta->sacar($_POST['saque']) == false){
        header("Location: index.php?erro=1"); exit;
    } else {
        $_SESSION['saldo'] = $conta->get_saldo();
        header("Location: index.php");
    }
}
if(isset($_POST['deposito'])){
    $conta->depositar($_POST['deposito']);
    $_SESSION['saldo'] = $conta->get_saldo();
}

header("Location: index.php");
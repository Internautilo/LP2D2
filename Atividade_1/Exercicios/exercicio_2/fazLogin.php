<?php

require "./ContaBancaria.php";

session_start();

$conta = new ContaBancaria($_POST['nome'], $_POST['conta']);



$_SESSION['nome'] = $conta->get_titular();
$_SESSION['conta'] = $conta->get_numeroConta();
$_SESSION['saldo'] = $conta->get_saldo();

header("Location: index.php"); exit;
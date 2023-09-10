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
    <title>Atividade 1 LP2D3</title>

</head>

<body>
    <hr class="invisible">
    <?php if ($_SESSION['isLogged'] != NULL) { ?>
        <div class="container">
            <h2 class="display-6">Bem vindo, <?= $_SESSION['nome'] ?></h2>
        </div>
    <?php } ?>
    <hr class="invisible vr" style="height: 125;">

    <div class="main align-items-center justify-content-center">
        <div class="d-flex justify-content-center align-items-center">
            <h3>Exercicio 5 - Tela de Cadastro e Login</h3>
        </div>
        <?php if ($_GET['success'] == 1) { ?>
            <hr class="invisible">
            <div class="d-flex justify-content-center">
                <div class="alert alert-success alert-sm" role="alert"> Usuário Cadastrado com sucesso.</div>
            </div>
        <?php } ?>
        <?php if ($_GET['success'] == 2) { ?>
            <hr class="invisible">
            <div class="d-flex justify-content-center">
                <div class="alert alert-success alert-sm" role="alert"> Login feito com sucesso.</div>
            </div>
        <?php } ?>
        <?php if ($_GET['success'] == 3) { ?>
            <hr class="invisible">
            <div class="d-flex justify-content-center">
                <div class="alert alert-info alert-sm" role="alert"> Logout feito com successo.</div>
            </div>
        <?php } ?>
        <hr class="invisible vr" style="height: 50;">
        <div class="d-flex justify-content-center">
            <a href="./login.php" class="btn btn-rounded btn-primary btn-lg" style="width: 300">Fazer Login</a>
        </div>
        <hr class="invisible">
        <div class="d-flex justify-content-center">
            <a href="./cadastro.php" class="btn btn-rounded btn-primary btn-lg" style="width: 300;">Cadastrar Usuário</a>
        </div>
        <hr class="invisible">
        <?php if ($_SESSION['isLogged'] != NULL) { ?>
            <div class="d-flex justify-content-center">
                <a href="./logout.php" class="btn btn-rounded btn-danger btn-lg">Logout</a>
            </div>
        <?php } ?>
        <hr class="invisible" style="height: 75px;">
        <div class="d-flex justify-content-center">
            <a href="../index.php" class="btn btn-rounded btn-primary btn-lg">Voltar ao Início</a>
        </div>

    </div>
</body>

</html>
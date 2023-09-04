<?php

session_start();

$produtos[] = $_SESSION['produtos'];

$produtos = new Produto($_POST['nome'], $_POST['valor']);

$_SESSION['produto'] = $produtos;


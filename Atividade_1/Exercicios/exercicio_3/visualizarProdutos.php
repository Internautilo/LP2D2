<?php
require_once "./Produto.php";
require_once "../inc/cabecalho.php";
require "./Database.php";

ini_set('display_errors', 1);
error_reporting(1);

$pdo = Database::conexao();

$sql = "SELECT * FROM produtos";
$produtos = $pdo->query($sql);


?>

<div class="container d-flex align-items-center justify-content-center">
    <div class="container justify-content-center align-items-center">
        <hr class="invisible">
        <div class="contaniner d-flex justify-content-center">
            <h1>Lista de Produtos</h1>
        </div>
        <table class="table align-middle table-hover table-bordered">
            <thead class="table-dark">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
            </thead>
            <tbody class="align-middle">
                <?php foreach ($produtos as $produto) {  ?>
                    <tr>
                        <th scope="row"><?= $produto['id']; ?></th>
                        <td><?= $produto['nomeProduto'] ?></td>
                        <td><?= $produto['valorProduto'] ?> R$</td>
                    </tr>
                <?php   }   ?>
            </tbody>
        </table>
        <vr class="vr invisible" style="height: 100px;"></vr>
        <div class="d-flex align-items-center justify-content-center">
            <a href="index.php" class="btn btn-lg btn-rounded btn-primary">Voltar</a>
        </div>


    </div>

</div>
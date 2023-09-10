<?php 
require_once "./Produto.php";
require_once "../inc/cabecalho.php";

if(!isset($_SESSION)){
    session_start();
}


var_dump($_SESSION);

$_SESSION['produtos'] = $produtos;

?>
<table>
    <thead>
        <th>Nome</th>
        <th>Preço</th>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto){  ?>
            <tr>
                <td><?= $_SESSION['produtos'] ?></td>
                <td><?= $_SESSION['produtos']['Produtovalor'] ?></td>
            </tr>
        <?php   }   ?>
    </tbody>
</table>

<a href="index.php" class="btn btn-primary">Voltar</a>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - LP2D3</title>
    <?php require_once './cabecalho.php'; 
            error_reporting(1);
    ?>
</head>

<body>
    <div class="main align-items-center justify-content-center" id="flex-container">
        <div class="d-flex justify-content-center align-items-center">
            <hr class="invisible vr" style="height: 500px;">
            <table class="d-flex align-items-center">
                <th class="d-flex justify-content-center"><h5>Exercicios</h5></th>
                <tr></tr>
                <td>
                    <a href="./cadastrarProduto.php" class="btn btn-primary">Cadastrar Produtos</a>
                </td>
                <br>
                <tr></tr>
                <td>
                    <a href="./visualizarProdutos.php" class="btn btn-primary">Visualizar Produtos  </a>
                </td>
                <tr></tr>
            </table>
        </div>
    </div>
</body>

</html>
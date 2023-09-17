<?php
include('HeaderFooterNav.php');

ini_set('display_errors', 1);
error_reporting(1);

if (!isset($_SESSION)) {
    session_start();
}

HeaderFooterNav::includeHeader();
HeaderFooterNav::includeNavbar();

?>

<html data-bs-theme="dark">
<hr class="vr invisible" style="height: 100px;" >
<div class="container main">
<h1 class="display-6">Lista de Clientes</h1>
<br>

    <div class="container d-flex justify-content-center">
        <table class="table table-dark">
            <caption>Lista de clientes.</caption>
            <thead class="table-light" >
                <th>Nome</th>
                <th>Contato</th>
                <th>Plano</th>
            </thead>
            <tbody>
                <?php foreach($clients as $client) { ?>

                    <tr>
                        <td><?= $client['name'] ?></td>
                        <td><?= $client['contact'] ?></td>
                        <td><?= strtoupper($client['plan']) ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</html>
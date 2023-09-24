<?php 
include('HeaderFooterNav.php');


session_start();

HeaderFooterNav::includeHeader(); 
HeaderFooterNav::includeNavbar();

?>
<html data-bs-theme="dark">



<hr class="invisible" style="height: 100px;" >

<div class="container">
    <div class="container py-5">
        <div class="container d-flex justify-content-center align-items-center">
            <h1>Error:</h1>
        </div>
        <div class="container d-flex justify-content-center">
        <h6><?= $error_message ?></h6>
        </div>
        <hr class="invisible" style="height: 100px;" >
        <div class="container d-flex justify-content-center">
            <a href="." class="btn btn-info btn-rounded" style="width: 200px;" >Voltar</a>
        </div>
    </div>
</div>
</html>
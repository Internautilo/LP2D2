<?php
include('HeaderFooterNav.php');

ini_set('display_errors', 1);
error_reporting(1);
session_start();

HeaderFooterNav::includeHeader();

HeaderFooterNav::includeNavbar();

?>

<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container">
        <hr class="invisible">
        <h1 class="display-6 tw-bold mb-5">Cadastro de Usuário</h1>
        <div class="lg d-flex align-items-center justify-content-center">
            <form class="form" method="post" action="./signinHandler.php" style="min-width: 50vh;">
                <!-- Name input -->
                <div class="">
                    <label for="email">E-mail</label>

                    <input type="email" id="email" class="form-control" name="email" />
                </div>

                <!-- Age input -->
                <div class="">
                    <label for="senha">Senha</label>

                    <input type="password" id="senha" name="senha" class="form-control" />
                </div>


                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-danger btn-block" style="width: 470px;">Cadastrar</button>

            </form>

        </div>
    </div>
    <hr class="vr invisible" style="height: 50;">
    <div class="d-flex justify-content-center">
        <a href="." class="btn btn-info btn-rounded " style="width: 200px;">Voltar</a>
    </div>
</div>
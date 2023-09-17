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
<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container">
        <hr class="invisible">
        <h1 class="display-6 tw-bold mb-5">Login</h1>
        <?php if ($success == 2) { ?>
            <div class="container d-flex justify-content-center">
                <alert class="alert alert-dismissible alert-success fade show" role="alert" style="width: 350px;">
                    Login feito com sucesso.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </alert>
            </div>
        <?php } ?>
        <?php if ($fail == 2) { ?>
            <div class="container d-flex justify-content-center">
                <alert class="alert alert-dismissible alert-danger fade show" role="alert" style="width: 350px;">
                    Erro: Login ou senha incorretos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </alert>
            </div>
        <?php } ?>
        <?php if ($fail == 3) { ?>
            <div class="d-flex justify-content-center">
                <alert class="alert alert-dismissible alert-danger fade show" role="alert" style="width: 350px;">
                    Erro: E-mail não cadastrado.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </alert>
            </div>
        <?php } ?>
        <div class="lg d-flex align-items-center justify-content-center">
            <form class="form" method="post" action="." style="min-width: 50vh;">
                <!-- Name input -->
                <div class="">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" class="form-control" name="email" />
                </div>

                <!-- Age input -->
                <div class="">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" />
                </div>


                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-block btn-danger" style="width: 470px;">Entrar</button>

                <!-- Hidden input -->
                <input type="hidden" name="action" value="logging">
            </form>

        </div>
    </div>
    <hr class="vr invisible" style="height: 50;">
    <div class="d-flex justify-content-center" role="button">
        <a href="./" class="btn btn-rounded btn-info" style="width: 200px;">Voltar</a>
    </div>
</div>
</html>
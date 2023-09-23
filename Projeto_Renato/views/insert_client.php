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
<hr class="invisible" style="height: 100px;" >

<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container" >
        <hr class="invisible">
        <h1 class="display-6 tw-bold mb-5">Inserção de Clientes</h1>
        <?php if ($success == 1){ ?>
            <div class="d-flex justify-content-center">
                <alert class="alert alert-dismissible alert-success fade show" role="alert" style="width: 350px;">
                    Cliente cadastrado com sucesso.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </alert>
            </div>
            
        <?php } ?>
        <div class="lg d-flex align-items-center justify-content-center">
                
            <form class="form" method="post" action="." style="max-width: 50vh;">

                <!-- Name input -->
                <div class="form-input">
                    <label for="clientName">Nome</label>

                    <input type="text" id="clientName" class="form-control" name="clientName" />
                </div>
                <br>

                <!-- Email input -->
                <div class="">
                    <label for="contact">Contato</label>

                    <input type="email" id="contact" class="form-control" name="contact" />
                </div>
                <br>

                <!-- Password -->
                <div class="">

                    <select name="plan" id="plan" class="form-select">
                        <option selected>Selecione um plano</option>
                        <option value="free">Gratuito</option>
                        <option value="pro">Profissional</option>
                        <option value="enterprise">Empresarial</option>
                    </select>

                </div>
                <br>


                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    </div>
                </div>

                

                <!-- Submit button -->
                <button type="submit" class="btn btn-danger btn-block" style="width: 470px;">Cadastrar</button>

                <!-- Hidden input -->
                <input type="hidden" name="action" value="client_insertion">
                
            </form>

        </div>
    </div>
    <hr class="vr invisible" style="height: 50;">
    <h6 class="d-flex justify-content-center">Já possui cadastro?</h6>
    <div class="d-flex justify-content-center">
        <form action="./" method="post">
            <input type="hidden" name="action" value="login">
            <button class="btn btn-rounded btn-info" style="width: 200px;">Fazer login</button>
        </form>
    </div>
</div>
</html>

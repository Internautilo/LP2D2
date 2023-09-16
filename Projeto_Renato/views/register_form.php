<?php
include('HeaderFooterNav.php');


HeaderFooterNav::includeHeader();

HeaderFooterNav::includeNavbar();

?>

<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container" >
        <hr class="invisible">
        <h1 class="display-6 tw-bold mb-5">Cadastro de Usuário</h1>
        <div class="lg d-flex align-items-center justify-content-center">
            <form class="form" method="post" action="." style="min-width: 50vh;">
                <!-- Hidden input -->
                <input type="hidden" name="action" value="register">


                <!-- Name input -->
                <div class="form-input">
                    <label for="name">Nome</label>

                    <input type="text" id="newName" class="form-control" name="name" />
                </div>
                <br>

                <!-- Email input -->
                <div class="">
                    <label for="email">E-mail</label>

                    <input type="email" id="email" class="form-control" name="email" />
                </div>
                <br>

                <!-- Password -->
                <div class="">
                    <label for="senha">Senha</label>

                    <input type="password" id="senha" name="senha" class="form-control" />
                </div>
                <br>


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
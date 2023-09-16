<?php
include('HeaderFooterNav.php');


HeaderFooterNav::includeHeader();
HeaderFooterNav::includeNavbar();

?>

<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container" >
        <hr class="invisible">
        <h1 class="display-6 tw-bold mb-5">Cadastro de Usuário</h1>
        <?php if ($_GET['success'] == 1){ ?>
            <div class="d-flex justify-content-center">
                <alert class="alert alert-dismissible alert-success fade show" role="alert" style="width: 350px;">
                    Usuário cadastrado com sucesso.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </alert>
            </div>
            
        <?php } ?>
        <div class="lg d-flex align-items-center justify-content-center">
                
            <form class="form" method="post" action="." style="min-width: 50vh;">

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
                    <label for="password">Senha</label>

                    <input type="password" id="password" name="password" class="form-control" />
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
                <input type="hidden" name="action" value="registration">
                
            </form>

        </div>
    </div>
    <hr class="vr invisible" style="height: 50;">
    <h6 class="d-flex justify-content-center">Já possui cadastro?</h6>
    <div class="d-flex justify-content-center">
        <form action="." method="post">
            <input type="hidden" value="login">
            <button class="btn btn-rounded btn-info" style="width: 200px;">Fazer login</button>
        </form>
    </div>
</div>
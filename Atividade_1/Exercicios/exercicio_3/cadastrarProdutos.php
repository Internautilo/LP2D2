<?php
require_once "../inc/cabecalho.php";
require_once 'Produto.php';

session_start();

?>
<hr class="invisible">
<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container">

        <body>

            <h1 class="display-6 tw-bold mb-5">
                Cadastro de Produtos
            </h1>
            <div class="lg d-flex align-items-center justify-content-center">
                <form method="post" action="" style="min-width: 50vh;">
                    <!-- Name input -->
                    <div class="">
                        <label for="nome">Nome</label>

                        <input type="text" id="nome" class="form-control" name="nome" />
                    </div>

                    <!-- Age input -->
                    <div class="">
                        <label for="valor">Preço</label>

                        <input type="number" id="valor" class="form-control" name="valor" />
                    </div>
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>

                </form>
            </div>
    </div>
</body>
</div>
<script>
    document.querySelectorAll('.form-outline').forEach((formOutline) => {
        new mdb.Input(formOutline).init();
    });
</script>
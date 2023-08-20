<?php
require_once "../inc/cabecalho.php";
require_once 'User.php';


?>
<hr class="invisible">
<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container">

        <body>

            <h1 class="display-6 tw-bold mb-5">
                <?php if (isset($_POST['nome'])) {
                    $usuario = new User($_POST['nome'], $_POST['idade'], $_POST['profissao']);
                    if ($usuario->get_saldo() < 0) {
                        $negativado = 1;
                    } else {
                        $negativado = 0;
                    }
                ?>

                    <h6><?= $usuario->apresentar(); ?></h6>
                    <?php
                    if ($negativado) { ?>
                        <div class="container">
                            <br>
                            <p>Aqui estão alguns cursos para que você possa ganhar dinheiro e sair do saldo negativo!</p>

                            <h6>Cursos:</h6>
                            <p>Introdução à PHP: https://www.curso1.com</p>
                            <p>Programação Orientada à Objetos: https://www.curso2.com</p>
                            <p>Integração de PHP ao Banco de Dados: https://www.curso3.com</p>
                        </div>
                    <?php } else { ?>
                        <div class="container">
                            <br>
                            <p>Aqui estão alguns cursos para aprofundar seu conhecimento:</p>
                            <h6>Cursos:</h6>
                            <p>Introdução à PHP: https://www.curso1.com</p>
                            <p>Programação Orientada à Objetos: https://www.curso2.com</p>
                            <p>Integração de PHP ao Banco de Dados: https://www.curso3.com</p>
                            <hr class="invisible">
                            <h6>Produtos em promoção:</h6>
                            <p>Produto A - R$ <?= rand(15, 50) ?></p>
                            <p>Produto B - R$ <?= rand(1, 25) ?></p>
                            <p>Produto C - R$ <?= rand(25, 100) ?></p>
                        </div>

                    <?php }
                } else { ?>
                    Faça seu login
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
                        <label for="idade">Idade</label>

                        <input type="number" id="idade" class="form-control" name="idade" />
                    </div>
                    <!-- Profession Input -->
                    <div class="">
                        <label for="profissao">Profissão</label>

                        <input type="selection" id="profissao" class="form-control" name="profissao" />
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

<?php }

?>
</body>
</div>
<script>
    document.querySelectorAll('.form-outline').forEach((formOutline) => {
        new mdb.Input(formOutline).init();
    });
</script>
<?php
require_once "../inc/cabecalho.php";
require_once "./ContaBancaria.php";


session_start();

?>
<hr class="invisible">
<div class="main align-items-center justify-content-center" id="flex-container">
    <div class="container">

        <body>
            <script>
                function formatar(mascara, documento) {
                    let i = documento.value.length;
                    let saida = '#';
                    let texto = mascara.substring(i);
                    while (texto.substring(0, 1) != saida && texto.length) {
                        documento.value += texto.substring(0, 1);
                        i++;
                        texto = mascara.substring(i);
                    }
                }
            </script>
            <h1 class="display-6 tw-bold mb-5">
                <?php if (isset($_SESSION['nome'], $_SESSION['conta'], $_SESSION['saldo'])) {     
                    $conta = new ContaBancaria($_SESSION['nome'], $_SESSION['conta']);
                    $conta->setSaldo($_SESSION['saldo']);
                ?>
                    <h6><?= $conta->apresentar(); ?></h6>
                    <br/>
                        <div class="container">
                            <br>
                            <form action="./movimentacaoBancaria.php" method="post">
                                <input type="number" id="saque">
                                <button type="submit">Sacar</button>
                            </form>
                            <?php if (isset($_GET['erro'])){ ?>
                                <p class="bold alert">Saldo insuficiente</p>
                            <?php } ?>
                            <form action="./movimentacaoBancaria.php" method="post">
                                <input type="number" id="deposito">
                                <button type="submit">Depositar</button>
                            </form>
                            <br><br>
                            <a href="logout.php" class="btn btn-primary">Logout</a>
                        </div>

                <?php } else { ?>
                    Insira suas informações
            </h1>
            <div class="lg d-flex align-items-center justify-content-center">
                <form method="post" action="fazLogin.php" style="min-width: 50vh;">
                    <!-- Name input -->
                    <div class="">
                        <label for="nome">Nome</label>

                        <input type="text" id="nome" class="form-control" name="nome" />
                    </div>

                    <!-- Age input -->
                    <div class="">
                        <label for="conta">Número da Conta</label>

                        <input type="text" id="conta" class="form-control" name="conta" maxlength="7" onkeypress="formatar('#####-#', this)"/>
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
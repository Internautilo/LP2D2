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
<hr class="invisible" style="height: 100px;">
<div class="container main">
    <h1 class="display-6">Lista de Planos</h1>
    <br>

    <div class="container d-flex justify-content-center">
        <div class="container mt-5">

            <div class="row row-cols-1 row-cols-md-3 mb-5 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Grátis</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 usuários inclusos</li>
                                <li>5 GB de armazenamento</li>
                                <li>Sem prioridade no suporte</li>
                                <li>Sem acesso à central de help desk</li>

                            </ul>

                            <?php if (isset($_SESSION)) { ?>
                                <?php if (isset($_SESSION['plan'])) { ?>
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="action" value="update_plan">
                                        <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Atualize seu plano</button>
                                    </form>
                                <?php } else { ?>
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="action" value="contract_plan">
                                        <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Inscreva-se gratuitamente</button>
                                    </form>
                                <?php } ?>
                            <?php } else { ?>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="action" value="register">
                                    <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Inscreva-se gratuitamente</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Profissional</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 usuários inclusos</li>
                                <li>10 GB de armazenamento</li>
                                <li>Prioridade no suporte via email</li>
                                <li>Acesso à central de help desk</li>
                            </ul>

                            <?php if (isset($_SESSION)) { ?>
                                <?php if (isset($_SESSION['plan'])) { ?>
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="action" value="update_plan">
                                        <button type="submit" class="w-100 btn btn-lg btn-primary">Atualize seu plano</button>
                                    </form>
                                <?php } else { ?>
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="action" value="contract_plan">
                                        <button type="submit" class="w-100 btn btn-lg btn-primary">Contrate agora</button>
                                    </form>
                                <?php } ?>
                            <?php } else { ?>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="action" value="register">
                                    <button type="submit" class="w-100 btn btn-lg btn-primary">Contrate agora</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Empresarial</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 usuários inclusos</li>
                                <li>15 GB de armazenamento</li>
                                <li>Suporte prioritário via telefone ou email</li>
                                <li>Acesso à central de help desk</li>
                            </ul>
                            <?php if (isset($_SESSION)) { ?>
                                <?php if (isset($_SESSION['plan'])) { ?>
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="action" value="update_plan">
                                        <button type="submit" class="w-100 btn btn-lg btn-primary">Atualize seu Plano</button>
                                    </form>
                                <?php } else { ?>
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="action" value="contract_plan">
                                        <button type="submit" class="w-100 btn btn-lg btn-primary">Contrate Agora</button>
                                    </form>
                                <?php } ?>
                            <?php } else { ?>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="action" value="register">
                                    <button type="submit" class="w-100 btn btn-lg btn-primary">Contrate agora</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
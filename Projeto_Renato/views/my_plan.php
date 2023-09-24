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
    <h1 class="display-6">Meu plano</h1>
    <br>

    <div class="container d-flex justify-content-center">
        <div class="container-fluid">
            <?php switch ($_SESSION['plan']) {

                case 'free': ?>
                    <div class="">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Grátis</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>10 usuários inclusos</li>
                                    <li>5 GB de armazenamento</li>
                                    <li>Sem prioridade no suporte de email/telefone</li>
                                    <li>Sem acesso à central de help desk</li>

                                </ul>
                                <form action="." method="post">
                                    <input type="hidden" name="action" value="cancel_plan">
                                    <button type="submit" class="w-100 btn btn-lg btn-danger">Cancelar Plano</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php break;

                case 'pro': ?>
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
                                <form action="." method="post">
                                    <input type="hidden" name="action" value="cancel_plan">
                                    <button type="submit" class="w-100 btn btn-lg btn-danger">Cancelar Plano</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php break;

                case 'enterprise': ?>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm ">
                            <div class="card-header py-3">
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
                                <form action="." method="post">
                                    <input type="hidden" name="action" value="cancel_plan">
                                    <button type="submit" class="w-100 btn btn-lg btn-danger">Cancelar Plano</button>
                                </form>
                            </div>
                        </div>
                    </div>
            <?php break;

                default: ?>
                    <h1 class="display-4">Nenhum Plano Cadastrado</h1>
                <?php break;
            } ?>
        </div>
    </div>
</div>

</html>
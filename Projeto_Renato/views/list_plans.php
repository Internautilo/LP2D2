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

                            <!-- Button trigger modal -->
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <?php if ($_SESSION['plan'] == false) { ?> Inscreva-se gratuitamente <?php } else { ?> Atualizar Plano <?php } ?>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php if ($_SESSION['plan'] == false) { ?>Contratar plano <?php } else { ?> Atualização de Plano <?php } ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="." method="post">
                                            <div class="modal-body">
                                                <?php if ($_SESSION['plan'] == false) { ?>Deseja contratar o plano Gratuito ?<?php } else { ?> Deseja atualizar seu plano para o <i>Plano Gratuito</i> ? <?php } ?>
                                            <?php if ($_SESSION['plan'] == false) { ?>
                                                <BR></BR>
                                                <label class="label" for="contact">Digite um meio de contato</label>
                                                <input type="text" name="contact" id="contact" class="form-control">
                                            <?php } ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                <input type="hidden" name="action" value="<?php if ($_SESSION['plan'] == false) { ?>contract_plan<?php } else { ?>update_plan<?php } ?>">
                                                <input type="hidden" name="plan" value="free">
                                                <button type="submit" class="btn btn-primary"><?php if ($_SESSION['plan'] == false) { ?>Confirmar contratação<?php } else { ?> Confirmar atualização <?php } ?></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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

                            <!-- Button trigger modal -->
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                <?php if ($_SESSION['plan'] == false) { ?>Contrate agora <?php } else { ?> Atualizar Plano <?php } ?>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php if ($_SESSION['plan'] == false) { ?>Contratar plano <?php } else { ?> Atualização de Plano <?php } ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="." method="post">
                                            <div class="modal-body">
                                                <?php if ($_SESSION['plan'] == false) { ?>Deseja contratar o plano Profissional ?<?php } else { ?> Deseja atualizar seu plano para o <i>Plano Profissional</i> ? <?php } ?>
                                            <?php if ($_SESSION['plan'] == false) { ?>
                                                <BR></BR>
                                                <label class="label" for="contact">Digite um meio de contato</label>
                                                <input type="text" name="contact" id="contact" class="form-control">
                                            <?php } ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                <input type="hidden" name="action" value="<?php if ($_SESSION['plan'] == false) { ?>contract_plan<?php } else { ?>update_plan<?php } ?>">
                                                <input type="hidden" name="plan" value="pro">
                                                <button type="submit" name="plan" value="pro" class="btn btn-primary"><?php if ($_SESSION['plan'] == false) { ?>Contratar plano <?php } else { ?> Confirmar Atualização <?php } ?></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                <?php if ($_SESSION['plan'] == false) { ?>Contrate agora <?php } else { ?> Atualizar Plano <?php } ?>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php if ($_SESSION['plan'] == false) { ?>Contratar plano <?php } else { ?> Atualização de Plano <?php } ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="." method="post">
                                            <div class="modal-body">
                                                <?php if ($_SESSION['plan'] == false) { ?>Deseja contratar o plano Empresarial ?<?php } else { ?> Deseja atualizar seu plano para o <i>Plano Empresarial</i> ? <?php } ?>
                                            <?php if ($_SESSION['plan'] == false) { ?>
                                                <BR></BR>
                                                <label class="label" for="contact">Digite um meio de contato</label>
                                                <input type="text" name="contact" id="contact" class="form-control">
                                            <?php } ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                <input type="hidden" name="action" value="<?php if ($_SESSION['plan'] == false) { ?>contract_plan<?php } else { ?>update_plan<?php } ?>">
                                                <input type="hidden" name="plan" value="enterprise">
                                                <button type="submit" name="plan" value="enterprise" class="btn btn-primary"><?php if ($_SESSION['plan'] == false) { ?>Contratar plano <?php } else { ?> Confirmar Atualização <?php } ?></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
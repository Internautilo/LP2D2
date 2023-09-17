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

<body>

    <main>

    <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-4 fw-bolder text-white mb-2">Seja bem vindo</h1>
                            <p class="lead text-white-50 mb-4">A empresa que está sempre em busca de entregar o que há de melhor à você</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#packages">Nossos Planos</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        

        <hr class="invisible" style="height: 100px;">


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm5TF7bFGCojSNCHreriWh-m8jeKeX37F7kQ&usqp=CAU" alt="">
                    <h2 class="fw-normal">Nossos colaboradores</h2>
                    <p>Como a nossa empresa, nossos colaboradores são sempre os mais bem treinados e qualificados para atender qualquer necessidade que nossos clientes precisem. Sempre com qualidade e excelência em seu atendimento.</p>
                    <p><a class="btn btn-secondary" href="#">Veja mais »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6iIixlnlbBL5KNUThGAE5Mgq7aPFJtHApdw&usqp=CAU" alt="">
                    <h2 class="fw-normal">Modo de Ação</h2>
                    <p>Dentro deste mercado ascirrado, estamos sempre fazendo o melhor para nos sobressairmos em relação aos nossos concorrentes. Fazemos tudo isso para que possamos ser lembrados não apenas pela qualidade de nossos serviços, mas também pelo modo em que enfrentamos desafios.</p>
                    <p><a class="btn btn-secondary" href="#">Veja mais »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmYxmjA8vhWNg9CxHQr7OIwBloB9YgjCxGxQ&usqp=CAU" alt="">
                    <h2 class="fw-normal">Infraestrutura</h2>
                    <p>Assim como nossos colaboradores e pensamento, não podemos deixar de lado em termos excelência em nossa infraestrutura. Possuindo sempre o que há de mais novo e <i>cutting-edge</i> no mercado para que tenhamos o melhor equipamento para atender a todos.</p>
                    <p><a class="btn btn-secondary" href="#">Veja mais »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <div class="container py-5">
    <hr class="vr invisible" style="height: 100px;">

    <div class="container d-flex justify-content-center">
        <h1 class="display-4" id="packages" > Veja nossos planos</h1>
    </div>
    <br>
    <hr class="invi">
    <br>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>

                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                </div>
            </div>
        </div>
    </div>
</div>


            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>© 2017–2023 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>

</html>
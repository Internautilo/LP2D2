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
                                <a class="btn btn-outline-light btn-lg px-4" href="#about">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <hr class="invisible" style="height: 50px;" id="about">


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
                    <p><a class="btn btn-secondary" href="#colaborators">Veja mais »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6iIixlnlbBL5KNUThGAE5Mgq7aPFJtHApdw&usqp=CAU" alt="">
                    <h2 class="fw-normal">Modo de Ação</h2>
                    <p>Dentro deste mercado ascirrado, estamos sempre fazendo o melhor para nos sobressairmos em relação aos nossos concorrentes. Fazemos tudo isso para que possamos ser lembrados não apenas pela qualidade de nossos serviços, mas também pelo modo em que enfrentamos desafios.</p>
                    <p><a class="btn btn-secondary" href="#action">Veja mais »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmYxmjA8vhWNg9CxHQr7OIwBloB9YgjCxGxQ&usqp=CAU" alt="">
                    <h2 class="fw-normal">Infraestrutura</h2>
                    <p>Assim como nossos colaboradores e pensamento, não podemos deixar de lado em termos excelência em nossa infraestrutura. Possuindo sempre o que há de mais novo e <i>cutting-edge</i> no mercado para que tenhamos o melhor equipamento para atender a todos.</p>
                    <p><a class="btn btn-secondary" href="#infrastructure">Veja mais »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="invisible" style="height: 300px;">
            <hr class="featurette-divider" id="colaborators">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Colaboradores. <span class="text-body-secondary">A espinha de nossa empresa.</span></h2>
                    <p class="lead">Na nossa empresa, acreditamos que nossos colaboradores são o coração do nosso sucesso. Investimos continuamente em sua formação e desenvolvimento, garantindo que estejam sempre entre os mais bem treinados e qualificados do mercado. Acreditamos que apenas com uma equipe altamente capacitada podemos atender às variadas necessidades e expectativas dos nossos clientes.

                        Nossos colaboradores são a espinha dorsal da nossa organização, e eles compartilham conosco o compromisso de oferecer um serviço de qualidade excepcional. Cada membro da nossa equipe é selecionado com rigor, não apenas por suas habilidades técnicas, mas também por sua paixão, dedicação e atenção aos detalhes. Afinal, sabemos que são esses atributos que nos permitem entregar um atendimento que excede as expectativas dos nossos clientes.

                        Além disso, nossa empresa valoriza a inovação e o aprendizado contínuo. Isso significa que nossos colaboradores estão sempre atualizados com as últimas tendências e melhores práticas do mercado, garantindo que possam oferecer soluções eficazes e relevantes para os desafios que nossos clientes enfrentam.

                        Em resumo, na nossa empresa, nossos colaboradores são a base do nosso compromisso com a qualidade e excelência no atendimento aos clientes. Estamos orgulhosos de contar com uma equipe tão talentosa e comprometida, e continuaremos investindo em seu crescimento e desenvolvimento para manter nosso padrão de excelência.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://live.staticflickr.com/65535/52630779539_663e373fe7.jpg" alt="">
                </div>
            </div>

            <hr class="featurette-divider" id="action">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Modo de Ação. <span class="text-body-secondary">Nossa difereça no cenário competitivo.</span></h2>
                    <p class="lead">No cenário altamente competitivo em que atuamos, estamos constantemente empenhados em superar nossos concorrentes. Nosso objetivo é ser reconhecidos não apenas pela qualidade excepcional de nossos serviços, mas também pela maneira como enfrentamos os desafios que surgem em nosso caminho.

                        Acreditamos que a verdadeira diferenciação não está apenas naquilo que entregamos, mas na abordagem que adotamos para alcançar nossos objetivos. É por isso que abraçamos cada desafio como uma oportunidade para inovar e crescer. Encaramos as dificuldades como um trampolim para o aprimoramento contínuo, buscando soluções criativas e eficazes que nos permitam ir além das expectativas dos nossos clientes.

                        Nossa dedicação em nos sobressair vai além da competência técnica. Colocamos um forte foco na cultura da empresa, promovendo valores como integridade, ética e respeito em todos os aspectos do nosso negócio. Acreditamos que uma equipe comprometida com esses princípios não só oferece melhores resultados, mas também cria relacionamentos duradouros com nossos clientes, baseados na confiança mútua.

                        Portanto, nossa busca pela excelência não é apenas uma aspiração, mas um compromisso contínuo. Queremos ser lembrados como uma empresa que não apenas oferece serviços de alta qualidade, mas também como uma organização que enfrenta desafios de forma exemplar e inovadora. Afinal, é assim que pretendemos não apenas sobreviver, mas prosperar neste mercado competitivo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://live.staticflickr.com/65535/49389103952_ff4b2cf256.jpg" alt="">
                </div>
            </div>

            <hr class="featurette-divider" id="infrastructure">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Infraestrutura. <span class="text-body-secondary">O mais moderno no mercado.</span></h2>
                    <p class="lead">Assim como investimos na capacitação e no pensamento inovador de nossos colaboradores, também reconhecemos a importância fundamental de mantermos excelência em nossa infraestrutura. Isso significa garantir que possuamos sempre o que há de mais novo e cutting-edge no mercado, a fim de proporcionar o melhor equipamento e recursos para atender às necessidades de todos os nossos clientes.

                        Nossa abordagem em relação à infraestrutura é baseada em um compromisso inabalável com a qualidade e a eficiência. Sabemos que a tecnologia e os recursos que utilizamos desempenham um papel crucial na nossa capacidade de fornecer serviços de excelência. Portanto, não medimos esforços para adotar as mais recentes inovações e soluções de ponta, garantindo que estejamos sempre à frente da curva.

                        Além disso, nossa busca pela infraestrutura de vanguarda não se limita apenas ao aspecto técnico. Também nos esforçamos para criar ambientes de trabalho e operacionais que sejam eficientes, sustentáveis e seguros. Isso não apenas melhora a experiência dos nossos colaboradores, mas também contribui para o nosso compromisso com a responsabilidade social e ambiental.

                        Em resumo, a excelência em nossa infraestrutura é um pilar fundamental da nossa abordagem para oferecer serviços de alta qualidade. Acreditamos que ao combinar colaboradores altamente capacitados com recursos de ponta, somos capazes de proporcionar resultados excepcionais aos nossos clientes e manter nossa posição de liderança no mercado.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://farm9.staticflickr.com/8410/30193245810_7b7ff74cd5.jpg" alt="">
                </div>
            </div>

            <hr class="featurette-divider">

        </div>
        <div class="container py-5">
            <hr class="vr invisible" style="height: 100px;">

            <div class="container d-flex justify-content-center">
                <h1 class="display-4" id="packages"> Veja nossos planos</h1>
            </div>
            <br>
            <hr class="invi">
            <br>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
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
                                <li>Sem prioridade no suporte de email/telefone</li>
                                <li>Sem acesso à central de help desk</li>

                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Inscreva-se gratuitamente</button>
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
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contrate agora</button>
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
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contate-nos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <?php HeaderFooterNav::includeFooter(); ?>
    </footer>
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>

</html>
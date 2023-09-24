<?php

class HeaderFooterNav
{

  public static function includeHeader()
  { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Projeto Renato</title>
    </head>
    
    <link href="views/css/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="views/css/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <?php
  }

  public static function includeNavbar()
  { ?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary  " aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">


          <?php
          #verifica se o usuário está logado e coloca o nome dele na navbar, caso contrario mostra o nome da empresa
          if (isset($_SESSION['isLogged'])) { ?>
            <a href="#" class="navbar-brand col-lg-3 me-0"> <?= $_SESSION['name'] ?></a>
          <?php } else { ?>
            <a class="navbar-brand col-lg-3 me-0" href="#">Empresa LTDA.</a>
          <?php } ?>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href=".?action=landing_page">Home</a>
            </li>
            <?php
            # Verifica se o usuário logado é o admin, e mostra um drop-down especifico para ele
            if ($_SESSION['email'] == "admin@admin.com") { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li class="invisible">.</li>
                  <li>
                    <form action="." method="post">
                      <input type="hidden" name="action" value="list_clients">
                      <button type="submit" class="dropdown-item">Listar clientes</button>
                    </form>
                  </li>
                </ul>
              </li>
            <?php } else if ($_SESSION['plan'] != false) { ?>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Meu plano</a>
                <ul class="dropdown-menu">
                  <li class="invisible">.</li>
                  <li>
                    <form action="." method="post">
                      <input type="hidden" name="action" value="my_plan">
                      <button type="submit" class="dropdown-item">Informações sobre meu plano</button>
                    </form>
                  </li>
                  <li>
                    <form action="." method="post">
                      <input type="hidden" name="action" value="list_plans">
                      <button type="submit" class="dropdown-item">Mudar de plano</button>
                    </form>
                  </li>
                </ul>
              </li>

            <?php } else { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Planos</a>
                <ul class="dropdown-menu">
                  <li>
                    <form action="." method="post">
                      <input type="hidden" name="action" value="list_plans">
                      <button type="submit" class="dropdown-item"><b>Aderir à um plano</b></button>
                    </form>
                  </li>
                </ul>
              </li>
            <?php } ?>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href=".?action=landing_page"></a>
            </li>


          </ul>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">

            <?php 
            if (isset($_SESSION['isLogged'])) { ?>

              <form action="." method="post">
                <input type="hidden" name="action" value="logoff">
                <button type="submit" class="btn btn-danger btn-rounded">Logoff</button>
              </form>
            <?php } else { ?>
              <ul class="list-group list-group-horizontal list-unstyled">
                <li>
                  <form action="." method="post">
                    <input type="hidden" name="action" value="register">
                    <button type="submit" class="btn btn-primary btn-rounded">Registrar</button>
                  </form>
                </li>
                <li class="invisible"><br>--</li>
                <li>
                  <form action="." method="post">
                    <input type="hidden" name="action" value="login">
                    <button type="submit" class="btn btn-success btn-rounded">Log-in</button>
                  </form>
                </li>
              </ul>


            <?php } ?>


          </div>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
          </div>
        </div>
      </div>
    </nav>




  <?php

  }

  public static function includeFooter()
  { ?>
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Inicio</a></li>
          <li class="nav-item"><a href="#packages" class="nav-link px-2 text-body-secondary">Preços</a></li>
          <li class="nav-item"><a href="#about" class="nav-link px-2 text-body-secondary">Sobre</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2023 Empresa, LTDA</p>
      </footer>
    </div>
<?php
  }
}

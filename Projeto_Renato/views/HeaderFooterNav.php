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

  <?php
  }

  public static function includeNavbar()
  { ?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-danger " aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
          <?php if (isset($_SESSION['isLogged'])) { ?>
            <a href="#" class="navbar-brand col-lg-3 me-0"> <?= $_SESSION['name'] ?></a>
          <?php } else { ?>
            <a class="navbar-brand col-lg-3 me-0" href="#">Navbar</a>
          <?php } ?>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            
            <?php if (isset($_SESSION['isLogged'])) { ?>
            
            
            <?php } else { ?>
              <a class="btn btn-warning btn-rounded" href="./">Register</a>
              <li class="invisible"></li>
              <a class="btn btn-success btn-rounded" href="">Log-in</a>
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
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
  </footer>
</div>
  <?php 
  }
}

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <script defer src="{{ asset('/js/bootstrap.js') }}"></script>
</head>


<body>

  <nav>
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3  mx-1 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="{{ asset('img/Lojinha_logo.png') }}" class="bg-info-subtle img-thumbnail col-3">
        </a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2">Produtos</a></li>
        <li><a href="#" class="nav-link px-2">Catalogo</a></li>
        <li><a href="#" class="nav-link px-2">Sobre nós</a></li>
        <li><a href="#" class="nav-link px-2">Contato</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Cadastro</button>
      </div>
    </header>
  </nav>
  </nav>
  <div class=" min-vh-100">
    @yield('content')
  </div>
  <footer>
    <div class="container-fluid">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2023 Lojinha, Inc</p>

        <a href="/"
          class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="{{ asset('img/Lojinha_logo.png') }}" class="col-2 bg-secondary img-thumbnail">
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
      </footer>
    </div>
  </footer>
</body>

</html>
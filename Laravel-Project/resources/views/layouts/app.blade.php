<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script defer src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</head>




<body>
    {{-- Modal --}}
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja realizar o logout ?</h5>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    <nav>
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3  mx-1 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="{{ route('home') }}" class="d-inline-flex  ms-2 mt-1 ">
                    <img src="{{ asset('img/Lojinha_logo.png') }}" class="px-2 py-2 bg-info-subtle img-thumbnail"
                        style="height: 3rem">
                </a>
            </div>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2">Produtos</a></li>
                <li><a href="{{ route('categories') }}" class="nav-link px-2">Catalogo</a></li>
                <li><a href="#" class="nav-link px-2">Sobre nós</a></li>
                <li><a href="#" class="nav-link px-2">Contato</a></li>
            </ul>
            <div class="col-md-3 text-end">

                @if (Auth::check())
                    @php
                        $user = Auth::user();
                    @endphp
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ $user->name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('account') }}" class="dropdown-item">Conta</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#logoutModal">Sair</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('user_login') }}" class="btn btn-outline-primary me-2">Login</a>
                    <a href="{{ route('user_signup') }}" class="btn btn-primary">Cadastro</a>
                @endif

            </div>
        </header>
    </nav>
    </nav>

    {{-- Content --}}
    <div class=" min-vh-100">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        <div class="container-fluid">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-body-secondary">© 2023 Lojinha, Inc</p>

                <div class="col-md-4 text-center mt-2" style="height: 4rem">
                    <img src="{{ asset('img/Lojinha_logo.png') }}" class="bg-light-subtle img-thumbnail py-2 px-2"
                        style="height: 4rem">
                </div>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="{{ route('home') }}"
                            class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="{{ route('categories') }}"
                            class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li class="nav-item"><a href="{{ url('/sobre_nos') }}"
                            class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
            </footer>
        </div>
    </footer>
</body>

</html>

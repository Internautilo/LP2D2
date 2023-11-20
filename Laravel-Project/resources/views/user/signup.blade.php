@extends('layouts.app')

@section('title', 'Lojinha - Registro')

@section('content')

    <div class="container" data-bs-theme="light">
        <hr class="vr invisible">

        <div class="row align-items-center justify-content-center my-5 pt-5 ">

            @if (session('success'))
                <div class="col-sm-12 text-center mb-4 alert alert-success">
                    Usuario Cadastrado com successo
                </div>
            @endif

            <div class="card col-sm-12 justify-content-center-center bg-primary-subtle" style="width: 50rem">
                <div class="card-body row  justify-content-center">
                    <div class="card  col-sm-12 ">
                        <div class="card-header text-center bg-body-secondary mt-3 rounded">
                            <h4 class="pt-2">Cadastro de Usuário</h4>
                        </div>
                        <div class="card-body">

                            <div class="container">
                                <form class="form" action="{{ url('/signup') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nome</label>
                                        <input type="text" required name="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" required name="email" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="form-label">Senha</label>
                                        <input type="password" required name="password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation" class="form-label">Confirmar senha</label>
                                        <input type="password" required name="password_confirmation" class="form-control">
                                    </div>

                                    <div class="form-group mt-5 text-center">
                                        <a href="{{ route('user_login') }}" class="btn fs-5 btn-outline-primary">Login</a>
                                        <button type="submit" required
                                            class="fs-5 btn rounded rounded-3 btn-primary">Cadastrar</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

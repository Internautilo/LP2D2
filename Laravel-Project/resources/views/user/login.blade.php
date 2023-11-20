@extends('layouts.app')

@section('title', 'Lojinha - Login')

@section('content')

    <div class="container" data-bs-theme="light">
        <hr class="vr invisible">

        <div class="row align-items-center justify-content-center my-5 pt-5 ">

            @if (session('success'))
                <div class="col-sm-12 text-center mb-4 alert alert-success">
                    Login feito com successo
                </div>
            @endif

            <div class="card col-sm-12 justify-content-center-center bg-dark-subtle" style="width: 50rem">
                <div class="card-body row justify-content-center">
                    <div class="card  col-sm-12 ">
                        <div class="card-header text-center bg-body-secondary mt-3 rounded">
                            <h4 class="pt-2">Login</h4>
                        </div>
                        <div class="card-body">

                            <div class="container">
                                <form class="form" action="{{ url('/login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" required name="email" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="form-label">Senha</label>
                                        <input type="password" required name="password" class="form-control">
                                    </div>

                                    <div class="form-group mt-5 text-center">
                                        <button type="submit" required
                                            class="fs-5 btn rounded rounded-3 btn-outline-primary">Cadastrar</button>
                                        <a href="{{ route('user_login') }}" class="btn fs-5 btn-primary">Login</a>
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

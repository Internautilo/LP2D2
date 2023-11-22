@extends('layouts.app')

@section('title', 'Listagem de Produtos')

@section('content')

<div class="container" data-bs-theme="light">
    <hr class="vr invisible">
    <div class="card">
        <div class="card-body bg-dark-subtle">
            <div class="card">
                <div class="card-header bg-dark-subtle">
                    <h4>Lista de produtos</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-sm-3">
                                <div class="card bg-light text-dark my-2 mx-2">
                                    <div class="card-header bg-dark-subtle text-light-emphasis">
                                        Nome produto
                                    </div>
                                    <img src="/uploads/products/" class="card-img-top">
                                    <div class="card-body">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-sm-6 d-flex justify-content-center">
                                                <form action="" method="post">
                                                    <button type="submit" class="btn btn-primary">
                                                        Editar
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col-sm-6 d-flex justify-content-center">
                                                <form action="" method="post">
                                                    <button type="submit" class="btn btn-danger">
                                                        Deletar
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection
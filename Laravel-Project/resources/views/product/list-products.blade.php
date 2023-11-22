@php
    use App\Models\Product;
    $products = Product::all();
@endphp

@extends('layouts.app')

@section('title', 'Listagem de Produtos')

@section('content')

    <div class="container" data-bs-theme="light">
        <hr class="vr invisible">
        <div class="card">
            <div class="card-header bg-dark text-light">
                <h4>Lista de produtos</h4>
            </div>
            <div class="card-body bg-dark-subtle">
                <div class="card">

                    <div class="card-body">
                        <div class="row justify-content-start ">
                            @foreach ($products as $product)
                                @if (!$product->deleted_at)
                                    <div class="col-sm-3">
                                        <div class="card bg-light text-dark my-2 mx-2 border border-black">
                                            <div class="card-header bg-info-subtle ">
                                                {{ $product->name }}
                                            </div>
                                            <img src="/uploads/products/{{ $product->product_image }}" class="card-img-top">
                                            <div class="card-body bg-dark">
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-sm-6 mt-2 d-grid justify-content-center">
                                                        <button href="#" class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $product->id }}">Editar</button>
                                                    </div>
                                                    <div class="col-sm-6 mt-2 d-flex justify-content-center">
                                                        <button href="#" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $product->id }}">Deletar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- editModal --}}
                                    <div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deseja Editar o produto:
                                                    </h5>
                                                </div>
                                                <div class="modal-body">
                                                    {{ $product->name }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <form action="" method="post" class="form">
                                                        <button type="submit" class="btn btn-outline-primary">
                                                            Confirmar
                                                        </button>
                                                        <input type="hidden" name="id"
                                                            value="{{ $product->id }}">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- editModal --}}
                                    {{-- deleteModal --}}
                                    <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deseja realizar o logout
                                                        ?
                                                    </h5>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <form action="" method="post" class="form">
                                                        <button type="submit" class="btn btn-outline-danger">
                                                            Confirmar
                                                        </button>
                                                        <input type="hidden" name="id"
                                                            value="{{ $product->id }}">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- deleteModal --}}
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



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
{{-- Modal --}}

@php
    use App\Models\Product;

@endphp

@extends('layouts.app')

@section('title', 'Inserçao de produtos')


@section('content')

    @if (isset($id))
        @php
            $checked = 0;
            print_r($id);
            $product = Product::find($id);
        @endphp
        @if (!$product)
            <script>
                window.location = "{{ route('account') }}"
            </script>
        @else
            <div class="container d-flex justify-content-center" data-bs-theme="light">
                <div class="row">
                    <hr class="hr invisible my-5">
                    <div class="col-md-12">
                        <div class="card bg-dark-subtle">
                            <div class="card-header bg-dark text-light">
                                <h4>Edição de Produtos</h4>
                            </div>
                            <div class="card-body row justify-content-center">
                                <div class="card" style="width: 50rem">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 mb-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Alterar produto
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="{{ route('edit_product_post') }}" method="post"
                                                            class="form">
                                                            @csrf
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="id"
                                                                    placeholder="Digite o ID do produto"
                                                                    aria-label="Example text with button addon"
                                                                    aria-describedby="button-addon1">
                                                                <button class="btn btn-success" type="submit"
                                                                    id="button-addon1">Confirmar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12">
                                                <form method="POST" action="{{ route('edit_product_post') }}"
                                                    enctype="multipart/form-data" class="form">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <label class="form-label" for="name">Nome</label>
                                                            <input type="text" name="name" id="name"
                                                                value="{{ $product->name }}" class="form-control">
                                                        </div>

                                                        <div class="container d-flex justify-content-center mt-4 ">
                                                            <img src="{{ asset("uploads/products/$product->product_image") }}"
                                                                class="img-thumbnail rounded rounded-circle">
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label class="form-label" for="description">Descrição</label>
                                                            <textarea type="text" name="description" value="{{ $product->description }}" id="description" class="form-control"></textarea>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label class="form-label" for="category">Categoria</label>
                                                            <select type="text" name="category" id="category"
                                                                class="form-select">
                                                                <option value="copo"
                                                                    @php if($product->category == 'copo') echo 'selected'; @endphp>
                                                                    Copo
                                                                </option>
                                                                <option value="tampa"
                                                                    @php if($product->category == 'tampa') echo 'selected'; @endphp>
                                                                    Tampa
                                                                </option>
                                                                <option value="prato"
                                                                    @php if($product->category == 'prato') echo 'selected'; @endphp>
                                                                    Prato
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label class="form-label" for="price">Preço</label>
                                                            <input type="number" step="0.01" name="price"
                                                                id="price" class="form-control"
                                                                value="{{ $product->price }}">
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label class="form-label" for="stock_quantity">Estoque</label>
                                                            <input type="number" name="stock_quantity" id="stock_quantity"
                                                                class="form-control" value="{{ $product->stock_quantity }}">
                                                        </div>

                                                        <div class="form-group col-sm-12 mb-3">
                                                            <p class="mt-1 fs-5">Estado</p>
                                                            @php
                                                                if ($product->status == 'active') {
                                                                    $checked = 1;
                                                                }
                                                            @endphp
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="status" id="inlineRadio1" value="inactive"
                                                                    @php if(!$checked) echo 'checked'; @endphp>
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">Inativo</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="status" id="inlineRadio2" value="active"
                                                                    @php if($checked) echo 'checked'; @endphp>
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">Ativo</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-sm-12">

                                                            <label class="form-label" for="product_image">Alterar
                                                                foto</label>
                                                            <input type="file" name="product_image" id="product_image"
                                                                value="{{ $product->product_image }}"
                                                                class="form-control">
                                                        </div>

                                                        <div class="form-group col-sm-12 d-flex justify-content-evenly">
                                                            <a href="{{ route('account') }}"
                                                                class="mt-5 btn btn-secondary">Cancelar</a>
                                                            <button type="submit"
                                                                class="mt-5 text-center btn btn-primary">Confirmar</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    @else
        <script>
            window.location = "{{ route('account') }}"
        </script>
    @endif

@endsection

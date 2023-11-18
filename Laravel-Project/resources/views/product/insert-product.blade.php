@extends('layouts.app')

@section('title', 'Inserçao de produtos')


@section('content')

    <div class="container">
        <div class="row">
            <hr class="hr invisible my-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="my-1">Inserçao de Produtos</h4>
                    </div>
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data" class="form">

                            <div class="form-group">
                                <label class="form-label" for="name">Nome</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="description">Descrição</label>
                                <textarea type="text" name="description" id="description" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="category">Categoria</label>
                                <input type="text" name="category" id="category" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="price">Preço</label>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="stock_quantity">Estoque</label>
                                <input type="text" name="stock_quantity" id="stock_quantity" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <p class="mt-1 fs-5">Estado</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="inactive">
                                    <label class="form-check-label" for="inlineRadio1">Inativo</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="active">
                                    <label class="form-check-label" for="inlineRadio2">Ativo</label>
                                  </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="product_image">Foto</label>
                                <input type="file" name="product_image" id="product_image" class="form-control">
                            </div>
                            
                            <div class="form-group text-center">
                                <button type="submit" class="mt-5 text-center btn btn-primary" >Inserir Produto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
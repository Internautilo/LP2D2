@extends('layouts.app')

@section('title', "Lista de {{ $category }}")


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-5">
                    <div class="card-header">
                        <h4>Lista de Produtos: {{ ucfirst($category) }}</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($products as $product)
                            
                            @if ($product['category'] == $category)

                            <div class="card">
                                <div class="card-header">
                                    {{ $product['name'] }}
                                </div>
                            </div>
                                
                            @else
                                
                                <div class="text-center">
                                    Produtos não encontrados nessa Categoria
                                </div>

                            @endif

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
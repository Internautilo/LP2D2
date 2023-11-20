@extends('layouts.app')

@section('title', 'Lista de ' . ucfirst($category) . 's')


@section('content')

    <div class="container">
        <div class="row">
            <div class="card my-5 col-12 bg-light text-dark">
                <div class="card-header">
                    <h4>Lista de Produtos: {{ ucfirst($category) }}</h4>
                </div>
                <div class="card-body text-center bg-light-subtle row justify-content-center align-items-center">
                    @foreach ($products as $product)
                        @if ($product['category'] == $category && $product['status'] == 'active')
                            <div class="card col-sm-3 bg-light text-dark my-2 mx-2">
                                <div class="card-header bg-dark-subtle text-light-emphasis">
                                    {{ $product['name'] }}
                                </div>
                                <img src="/uploads/products/{{ $product['product_image'] }}" class="card-img-top">
                                <div class="card-body">
                                    <p>{{ $product['description'] }}</p>
                                    <p class="bg-light-subtle rounded rounded-5 text-success-emphasis">R$
                                        {{ $product['price'] }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

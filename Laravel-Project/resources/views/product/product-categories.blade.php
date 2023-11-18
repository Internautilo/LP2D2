@extends('layouts.app')

@section('title', 'Categoria de Produtos')

@section('content')
<hr class="hr invisible my-5">
<div class="container rounded-5 text-center pb-1 px-3 mb-5 text-primary-emphasis bg-dark-subtle border border-3 border-shadow">
    <p class="pt-5 pb-1 my-2 col-12 bolder fs-1 text-center">Produtos</p>
    <div class="container text-center mx-auto px-auto my-5 py-5 ">
        <div class="row  align-items-center justify-content-evenly">
            <div class="col-sm-3 card pt-2 bg-light text-dark border border-4 rounded rounded-4 border-shadow-3 ">
                <div class="card-header bg-light">Copos</div>
                <img src="{{ asset('img/cat-copo.webp') }}"
                    class="img-card-top">
                <div class="card-body">
                    <h5 class="card-title">Copo plastico descartável</h5>
                    <p class="card-text">Copos plásticos descartáveis em polipropileno (PP), ideais para eventos e
                        festas. Leves, resistentes e ecologicamente corretos. Com capacidade de variadas, são a escolha
                        perfeita para servir bebidas com praticidade e sustentabilidade.</p>
                    <a href="{{ route('list_product', 'copo') }}" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="col-sm-3 card pt-2 bg-light text-dark border border-4 rounded rounded-4 border-shadow-3 ">
                <div class="card-header bg-light">Tampas</div>
                <img src="{{ asset('img/cat-tampa.webp') }}"
                    class="img-card-top">
                <div class="card-body">
                    <h5 class="card-title">Tampa plástica descartável</h5>
                    <p class="card-text">Tampas descartáveis em poliestireno (PS) com encaixe perfeito em nossos copos. Feitas para
                        vedação segura, garantindo higiene e evitando derramamentos. Práticas para eventos, mantêm a
                        qualidade das bebidas.</p>
                    <a href="{{ route('list_product', 'tampa') }}" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="col-sm-3 card pt-2 bg-light text-dark border border-4 rounded rounded-4 border-shadow-3 ">
                <div class="card-header bg-light">Pratos</div>

                <img src="{{ asset('img/cat-prato.jpg') }}"
                    class="img-card-top">
                <div class="card-body">
                    <h5 class="card-title">Prato plástico descartável</h5>
                    <p class="card-text">Pratos descartáveis em poliestireno (PS) combinam praticidade e resistência.
                        Com design elegante, são ideais para eventos e festas. Leves e duráveis, facilitam o serviço de
                        refeições, proporcionando uma experiência sempre agradável.</p>
                    <a href="{{ route('list_product', 'prato') }}" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
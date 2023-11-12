@extends('layouts.app')

@section('content')
<div class="container rounded-5 text-center pb-3 px-3 my-5 text-primary-emphasis bg-light-subtle border border-3">
    <h1 class="container-fluid pt-5 pb-3 my-5 display-4 text-center">Produtos</h1>
    <div class="container text-center mx-auto px-auto my-5 py-5 ">
        <div class="row  align-items-center justify-content-evenly">
            <div class="col-sm-3 card pt-2 bg-info-subtle">
                <div class="card-header bg-light-subtle">Copos</div>
                <img src="{{ asset('img/cat-copo.webp') }}"
                    class="img-card-top">
                <div class="card-body">
                    <h5 class="card-title">Copo plastico descartável</h5>
                    <p class="card-text">Copos plásticos descartáveis em polipropileno (PP), ideais para eventos e
                        festas. Leves, resistentes e ecologicamente corretos. Com capacidade de variadas, são a escolha
                        perfeita para servir bebidas com praticidade e sustentabilidade.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="col-sm-3 card pt-2 bg-info-subtle">
                <div class="card-header bg-light-subtle">Tampas</div>
                <img src="{{ asset('img/cat-tampa.webp') }}"
                    class="img-card-top">
                <div class="card-body">
                    <h5 class="card-title">Tampa plástica descartável</h5>
                    <p class="card-text">Tampas descartáveis em poliestireno (PS) com encaixe perfeito em nossos copos. Feitas para
                        vedação segura, garantindo higiene e evitando derramamentos. Práticas para eventos, mantêm a
                        qualidade das bebidas.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="col-sm-3 card pt-2 bg-info-subtle">
                <div class="card-header bg-light-subtle">Pratos</div>

                <img src="{{ asset('img/cat-prato.jpg') }}" class="img-card-top">
                <div class="card-body">
                    <h5 class="card-title">Prato plástico descartável</h5>
                    <p class="card-text">Pratos descartáveis em poliestireno (PS) combinam praticidade e resistência.
                        Com design elegante, são ideais para eventos e festas. Leves e duráveis, facilitam o serviço de
                        refeições, proporcionando uma experiência agradável.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
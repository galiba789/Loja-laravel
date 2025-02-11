@extends('layouts.layout')
@section('content')
    @include('home.partials.navbar')

    <div class="container mt-5">
        <div id="bannerCarousel" class="carousel slide mb-4" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/6915a00b-916e-46f5-9b80-f2cac2435ccd(1).png')}}" class="d-block w-100" alt="Banner 1">
                </div>
            </div>
        </div>

        <h2 class="mb-4">Nossos Produtos</h2>
        <div class="owl-carousel owl-theme">
            @foreach ($produtos as $produto)
            <div class="item">
                <div class="card">
                    <img src="{{ asset('storage/'. $produto["imagem"]) }}" alt="Imagem do Produto" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto['nome'] }}</h5>
                        <p class="card-text">{{ $produto['descricao']}} </p>
                        <a href="{{ route('produtos', ['id' => $produto['id']] ) }}" class="btn btn-danger">Comprar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-truck fa-3x mb-3"></i>
                        <h5 class="card-title">Entrega Rápida</h5>
                        <p class="card-text">Receba seus produtos rapidamente com nossa entrega eficiente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-shield-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Compra Segura</h5>
                        <p class="card-text">Garantimos a segurança de seus dados e transações.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-headset fa-3x mb-3"></i>
                        <h5 class="card-title">Suporte 24/7</h5>
                        <p class="card-text">Estamos aqui para ajudar você a qualquer momento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.partials.footer')
@endsection

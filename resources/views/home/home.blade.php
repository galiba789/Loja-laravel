@extends('layouts.layout')
@section('content')
    @include('home.partials.navbar')
    <div class="container mt-5">
        <div class="owl-carousel owl-theme">
            @foreach ($produtos as $produto)
            <div class="item">
                <div class="card">
                    <img src="{{ asset('storage/produtos/' . $produto['imagem']) }}" alt="Imagem do Produto" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto['nome'] }}</h5>
                        <p class="card-text">{{ $produto['descricao']}} </p>
                        <a href="#" class="btn btn-danger">Comprar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    @include('home.partials.footer')
@endsection

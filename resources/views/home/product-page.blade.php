@extends('layouts.layout')
@section('content')
@include('home.partials.navbar')

<div class="container text-center">
    <div class="card mx-auto" style="width: 24rem;">
        <img src="{{ asset('storage/'. $produto['imagem']) }}" class="card-img-top" alt="Produto 1">
        <div class="card-body">
            <h5 class="card-title">{{ $produto['nome'] }}</h5>
            <p class="card-text">{{ $produto['descricao'] }}</p>
            <a href="#" class="btn btn-danger">Comprar</a>
        </div>
    </div>
</div>

@include('home.partials.footer')
@endSection

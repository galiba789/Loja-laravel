@extends('layouts.layout')
@section('content')
@include('home.partials.navbar')

<div class="container product-page mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/'. $produto["imagem"]) }}" class="img-fluid product-photo" alt="Foto do Produto">
        </div>
        <div class="col-md-6">
            <h1>{{ $produto['nome']}}</h1>
            <p>{{ $produto['descricao'] }}</p>
            <a href="{{route('confirmacao',  ['id' => $produto['id']])}}">
                <button class="btn btn-buy">Comprar</button>
            </a>
        </div>
    </div>

@include('home.partials.footer')
@endSection

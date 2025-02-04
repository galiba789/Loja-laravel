@extends('layouts.layout')
@section('content')
    @include('home.partials.navbar')
    <div class="container mt-5">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Produto 1</h5>
                        <p class="card-text">Descrição breve do produto 1.</p>
                        <a href="#" class="btn btn-danger">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 2</h5>
                        <p class="card-text">Descrição breve do produto 2.</p>
                        <a href="#" class="btn btn-danger">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produto 3">
                    <div class="card-body">
                        <h5 class="card-title">Produto 3</h5>
                        <p class="card-text">Descrição breve do produto 3.</p>
                        <a href="#" class="btn btn-danger">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('home.partials.footer')
@endsection

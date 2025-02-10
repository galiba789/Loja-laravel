@extends('layouts.layout')
@section('content')
@include('home.partials.navbar')

<div class="container confirmation-page mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1>Obrigado pela sua compra!</h1>
            <p>Seu pedido foi confirmado e está sendo processado. Em breve, você receberá um e-mail com os detalhes do seu pedido.</p>
            <p><strong>Número do Pedido:</strong> #{{ $produto['id'] }}</p>
            <p>Se você tiver alguma dúvida ou precisar de mais informações, entre em contato com nosso suporte ao cliente.</p>
            <button class="btn btn-home" onclick="window.location.href='{{ route('home') }}'">Voltar para a Página Inicial</button>
        </div>
    </div>
</div>

@include('home.partials.footer')
@endSection

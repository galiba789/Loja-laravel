@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="card bg-white d-flex"  >
            <h3 style="color: #000; align-self: center;" class="mt-1">Login</h1>
                <div class="m-4">

                    <form action="" style="color: #000">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control">
                        </div>


                        <button type="submit" class="mt-3 btn btn-success" style=" ">
                            Entrar
                        </button>
                    </form>
                    <a class="small mt-4" href="{{route('userCadastro')}}">Não tem uma conta ainda ? Cadastre-se</a>
                </div>
        </div>
    </div>


@endSection


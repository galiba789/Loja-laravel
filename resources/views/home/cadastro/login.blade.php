@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="card bg-white d-flex"  >
            <h3 style="color: #000; align-self: center;" class="mt-1">Login</h1>
                <div class="m-4">

                    <form action="{{ route('userLoginSubmit') }} " style="color: #000" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="name">
                            @error('email')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" name="password" id="password">
                            @error('password')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        
                        <button type="submit" class="mt-3 btn btn-success">
                            Entrar
                        </button>
                    </form>
                    <a class="small mt-4" href="{{route('userCadastro')}}">Não tem uma conta ainda ? Cadastre-se</a>
                </div>
        </div>
    </div>


@endSection


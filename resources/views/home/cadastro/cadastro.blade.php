@extends('layouts.layout')
@section('content')

<div class="container">
    <div class="card bg-white d-flex"  >
        <h3 style="color: #000; align-self: center;" class="mt-1">Cadastro</h1>
            <div class="m-4">

                <form action="{{route('userCadastroSubmit')}}" style="color: #000" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">nome</label>
                        <input type="name"  id="name"  name="name" class="form-control">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        @if ($errors->any())
                            <div class="text-danger">
                                @foreach ($errors->all() as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" class="form-control">
                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <button type="submit" class="mt-3 btn btn-success">
                        Cadastrar
                    </button>
                </form>

            </div>
    </div>
</div>


@endSection


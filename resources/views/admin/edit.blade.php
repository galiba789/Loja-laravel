@extends('adminlte::page')

@section('title', 'Editar Produto')

@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Editar Produto</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editar Produto</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('atualizar', $produto->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nome">Nome do Produto</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $produto->nome) }}">
                                @error('nome')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" value="{{ old('descricao', $produto->descricao) }}">
                                @error('descricao')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="preco">Preço</label>
                                <input type="text" class="form-control" id="preco" name="preco" value="{{ old('preco', $produto->preco) }}">
                                @error('preco')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="estoque">Estoque</label>
                                <input type="text" class="form-control" id="estoque" name="estoque" value="{{ old('estoque', $produto->estoque) }}">
                                @error('estoque')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="imagem">Imagem</label>
                                <input type="file" class="form-control" id="imagem" name="imagem">
                                @if ($produto->imagem)
                                    <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem do Produto" class="img-thumbnail mt-2" width="150">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Atualizar</button>
                            <a href="{{ route('admin/produtos') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop

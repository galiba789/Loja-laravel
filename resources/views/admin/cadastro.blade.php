@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cadastrar Produto</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Novo Produto</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('cadastrar')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Produto</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                                @error('nome')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="descricao">descricao</label>
                                <input type="text" class="form-control" id="descricao" name="descricao">
                                @error('descricao')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="preco">Preço</label>
                                <input type="text" class="form-control" id="preco" name="preco">
                                @error('preco')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="estoque">Estoque</label>
                                <input type="text" class="form-control" id="estoque" name="estoque">
                                @error('estoque')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="imagem">Imagem</label>
                                <input type="file" class="form-control" id="imagem" name="imagem">
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                            <a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop

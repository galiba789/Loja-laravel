@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Lista de Produtos</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Produtos</h3>
                            <div class="card-tools">
                                <a href="{{ route('cadastro') }}" class="btn btn-success"><i class="fas fa-plus"></i> Novo
                                    Produtos</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Preço</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>R$ </td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>
                                                Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Tem certeza que deseja excluir?');"><i
                                                    class="fas fa-trash"></i> Excluir</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


@stop

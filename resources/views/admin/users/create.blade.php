@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Novo Usuário</h1>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                <h4 class="alert-heading">Erro(s) ocorrido(s):</h4>
                <!-- alert-heading -->
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-light">&times;</span>
                <!-- text-light -->
            </button>
            <!-- close -->
        </div>
        <!-- alert-danger -->
    @endif

    <form method="POST" action="{{ route('users.store') }}" class="form-horizontal">
        @csrf
        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label">Nome Completo:</label>
                <!-- col-sm-2 -->
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
                    <!-- form-control -->
                </div>
                <!-- col-sm-10 -->
                </div>
                <!-- row -->
        </div>
        <!-- form-group -->
        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label">E-mail:</label>
                <!-- col-sm-2 -->
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                    <!-- form-control -->
                </div>
                <!-- col-sm-10 -->
                </div>
                <!-- row -->
        </div>
        <!-- form-group -->
        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label">Senha:</label>
                <!-- col-sm-2 -->
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" />
                    <!-- form-control -->
                </div>
                <!-- col-sm-10 -->
                </div>
                <!-- row -->
        </div>
        <!-- form-group -->
        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label">Confirmar Senha:</label>
                <!-- col-sm-2 -->
                <div class="col-sm-10">
                    <input type="password" name="password_confirmation" class="form-control" />
                    <!-- form-control -->
                </div>
                <!-- col-sm-10 -->
                </div>
                <!-- row -->
        </div>
        <!-- form-group -->
        <div class="form-group">
            <div class="row">
                <label class="col-sm-2 control-label"></label>
                <!-- col-sm-2 -->
                <div class="col-sm-10">
                    <input type="submit" value="Cadastrar" class="btn btn-success" />
                </div>
                <!-- col-sm-10 -->
                </div>
                <!-- row -->
        </div>
        <!-- form-group -->
    </form>    
@endsection
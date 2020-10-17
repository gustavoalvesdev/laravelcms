@extends('adminlte::page')

@section('title', 'Editar Usuário')

@section('content_header')
    <h1>Editar Usuário</h1>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                <h5 class="alert-heading"><i class="icon fas fa-ban"></i> Erro(s) ocorrido(s):</h5>
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

    <div class="card">
        <div class="card-header">
            <h5>Preencha os dados abaixo:</h5>
        </div>
        <!-- card-header -->
        <div class="card-body">
            <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}" class="form-horizontal">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nome Completo:</label>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">E-mail:</label>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror"" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Senha:</label>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Confirmar Senha:</label>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror"" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <input type="submit" value="Salvar" class="btn btn-success" />
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
            </form>    
        </div>
        <!-- card-body -->
    </div>
    <!-- card -->
@endsection
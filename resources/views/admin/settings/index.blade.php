@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
    <h1>Configurações</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('settings.save') }}" method="POST" class="form-horizontal">
                @method('PUT')
                @csrf

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Título do Site</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" value="" class="form-control" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Subtítulo do Site</label>
                    <div class="col-sm-10">
                        <input type="text" name="subtitle" value="" class="form-control" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">E-mail para Contato</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="" class="form-control" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Cor do Fundo</label>
                    <div class="col-sm-10">
                        <input type="color" name="bgcolor" value="" class="form-control" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Cor do Texto</label>
                    <div class="col-sm-10">
                        <input type="color" name="textcolor" value="" class="form-control" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->

                <div class="form-group row">
                    <div class="col-sm-2 col-form-label"></div>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <input type="submit" value="Salvar" class="btn btn-success" />
                        <!-- btn -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
            </form>
            <!-- form-horizontal -->
        </div>
        <!-- card-body -->
    </div>
    <!-- card -->
@endsection

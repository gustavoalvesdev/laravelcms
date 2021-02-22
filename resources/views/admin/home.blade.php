@extends('adminlte::page')

@section('title', 'Painel')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $visitsCount }}</h3>
                    <p>Visitas</p>
                </div>
                <!-- inner -->
                <div class="icon">
                    <i class="far fa-fw fa-eye"></i>
                    <!-- far -->
                </div>
                <!-- icon -->
            </div>
            <!-- small-box -->
        </div>
        <!-- col-md-3 -->
        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $onlineCount }}</h3>
                    <p>Usuários Online</p>
                </div>
                <!-- inner -->
                <div class="icon">
                    <i class="far fa-fw fa-heart"></i>
                    <!-- far -->
                </div>
                <!-- icon -->
            </div>
            <!-- small-box -->
        </div>
        <!-- col-md-3 -->
        <div class="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $pageCount }}</h3>
                    <p>Páginas</p>
                </div>
                <!-- inner -->
                <div class="icon">
                    <i class="far fa-fw fa-sticky-note"></i>
                    <!-- far -->
                </div>
                <!-- icon -->
            </div>
            <!-- small-box -->
        </div>
        <!-- col-md-3 -->
        <div class="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $userCount }}</h3>
                    <p>Usuários</p>
                </div>
                <!-- inner -->
                <div class="icon">
                    <i class="far fa-fw fa-user"></i>
                    <!-- far -->
                </div>
                <!-- icon -->
            </div>
            <!-- small-box -->
        </div>
        <!-- col-md-3 -->
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Páginas mais visitadas</h3>
                    <!-- card-title -->
                </div>
                <!-- card-header -->
                <div class="card-body">
                    ...
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div>
        <!-- col-md-6 -->
        <div class="col-md-6">
            <div class="card bg-dark">
                <div class="card-header">
                    <h3 class="card-title">Sobre o sistema</h3>
                    <!-- card-title -->
                </div>
                <!-- card-header -->
                <div class="card-body">
                    ...
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div>
        <!-- col-md-6 -->
    </div>
    <!-- row -->
@endsection

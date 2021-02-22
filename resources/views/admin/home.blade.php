@extends('adminlte::page')

@section('plugins.Chartjs', true);

@section('title', 'Painel')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h1>Dashboard</h1>
    </div>
    <!-- col-md-6 -->
    <div class="col-md-6">

        <form method="GET">
            <select onChange="this.form.submit()" name="interval" class="float-md-right">
                <option {{ $dateInterval==30 ? 'selected' : '' }} value="30">Último mês</option>
                <option {{ $dateInterval==60 ? 'selected' : '' }} value="60">Últimos 2 meses</option>
                <option {{ $dateInterval==90 ? 'selected' : '' }} value="90">Últimos 3 meses</option>
                <option {{ $dateInterval==120 ? 'selected' : '' }} value="120">Últimos 4 meses</option>
            </select>
            <!-- float-md-right -->
        </form>

    </div>
    <!-- col-md-6 -->
</div>
<!-- row -->
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
                <canvas id="pagePie"></canvas>
                <!-- pagePie -->
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

<script>
    window.onload = function () {

        let ctx = document.getElementById('pagePie').getContext('2d');
        window.pagePie = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: {{ $pageValues }},
            backgroundColor: ['#00f', '#f00', '#0f0']
        }],
            labels: {!! $pageLabels!!}
                },
    options: {
        responsive: true,
            legend: {
            display: false
        }
    }
            });
        }

</script>

@endsection

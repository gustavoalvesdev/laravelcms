@extends('site.layout')

@section('title', $page['title'])

@section('content')

    <section class="title-page" style='background-image:url("{{ asset('assets/images/capa.png') }}");'>
        <div class="overlay__title-page"></div>
        <!-- overlay__title-page -->
        <div class="container">
            <h2 class="wow bounceInLeft">{{ $page['title'] }}</h2>
            <p class="wow bounceInLeft">
                Sou especialista no desenvolvimento de Websites responsivos (se adaptam a qualquer dispositivo), com painel
                administrativo para que você ou sua equipe possa atualizar seu site de qualquer lugar e em qualquer
                dispositivo, sem a necessidade de uma equipe técnica para isso.
            </p>
        </div>
        <!-- container -->
    </section>
    <!-- title-page -->

    <section class="sobre">
        <div class="container">
            {!! $page['body'] !!}
        </div>
        <!-- container -->
    </section>
    <!-- sobre -->
@endsection

@extends('adminlte::page')

@section('title', 'Nova Página')

@section('content_header')
    <h1>Nova Página</h1>
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
            <form method="POST" action="{{ route('pages.store') }}" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Título</label>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <input type="text" name="title" value="{{ old('title') }}"
                            class="form-control @error('title') is-invalid @enderror" />
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Corpo</label>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <textarea name="body" class="form-control bodyfield">{{ old('body') }}</textarea>
                        <!-- form-control -->
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
                <div class=" form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <!-- col-sm-2 -->
                    <div class="col-sm-10">
                        <input type="submit" value="Criar" class="btn btn-success" />
                    </div>
                    <!-- col-sm-10 -->
                </div>
                <!-- form-group -->
            </form>
        </div>
        <!-- card-body -->
    </div>
    <!-- card -->

    <script src="https://cdn.tiny.cloud/1/b42us2li6se82g05p71vf5ym73octeflt91cvxkuv2yr8c5d/tinymce/5/tinymce.min.js">
    </script>

    <script>
        tinymce.init({
            selector: 'textarea.bodyfield',
            'height': 300,
            'menubar': false,
            'plugins': [
                'link',
                'table',
                'image',
                'autoresize',
                'lists'
            ],
            'toolbar': 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist',
            'content_css': [
                "{{ asset('assets/css/content.css') }}"
            ],
            'images_upload_url': "{{ route('imageupload') }}",
            'images_upload_credentials': true,
            'convert_urls': false
        });

    </script>
@endsection

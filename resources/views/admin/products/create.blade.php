@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Crear un producto</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-danger">
            {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.products.store', 'autocomplete' => 'off', 'files' => true]) !!}

                @include('admin.products.partials.form')

                <div>
                    {!! Form::submit('Crear nuevo producto', ['class' => 'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor5-build-classic/ckeditor.js') }}"></script>
    <script src="{{ asset('js/products/form.js') }}"></script>
@stop

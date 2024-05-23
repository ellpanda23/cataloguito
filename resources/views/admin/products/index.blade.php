@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    @can('admin.products.create')
        <a class="float-right btn btn-sm btn-secondary" href="{{ route('admin.products.create') }}">Nuevo producto</a>
    @endcan
    <h1>Lista de productos</h1>
@stop

@section('content')

@livewire('admin.products.product-index')

@stop

@section('css')
@stop

@section('js')
@stop

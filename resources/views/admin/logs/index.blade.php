@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de actividad</h1>
@stop

@section('content')

    @livewire('admin.logs.logs-index')

@stop

@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

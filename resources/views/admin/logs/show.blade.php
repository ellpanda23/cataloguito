@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Show ActivityLog</h1>
@stop

@section('content')

    {{$log}}

@stop

@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

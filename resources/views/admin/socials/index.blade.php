@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Redes Sociales</h1>
@stop

@section('content')

    @livewire('admin.socials.social-index')

@stop

@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

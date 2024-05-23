@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@can('admin.categories.create')
    <a class="float-right btn btn-sm btn-secondary" href="{{ route('admin.categories.create') }}">Nueva categoria</a>
@endcan
<h1>Lista de categorias</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td width="10px">
                            @can('admin.categories.edit')
                                <a class="btn btn-primary"
                                    href="{{ route('admin.categories.edit', $category) }}">Editar</a>
                            @endcan
                        </td>

                        <td width="10px">
                            @can('admin.categories.destroy')

                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">Eliminar</button>

                                </form>

                            @endcan

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop

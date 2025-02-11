@extends('adminlte::page')

@section('title', 'Home English')

@section('content_header')
    @can('admin.roles.create')
        <a class="float-right btn btn-sm btn-secondary" href="{{ route('admin.roles.create') }}">Nuevo rol</a>
    @endcan
    <h1>Lista de roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>Listo</strong> {{session('info')}}
        </div>
    @endif

    <div class="card">

        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width=10px>
                                @can('admin.roles.edit')
                                    <a class="btn btn-secondary" href="{{route('admin.roles.edit', $role)}}">Editar</a>
                                @endcan
                            </td>
                            <td width=10px>
                                @can('admin.roles.destroy')
                                    <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningun rol registrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

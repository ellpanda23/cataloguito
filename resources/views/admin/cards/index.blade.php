@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar tarjetas de inicio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cards as $card)
                    <tr>
                        <td>{{ $card->title }}</td>
                        <td>{{ $card->description }}</td>
                        <td width="10px">
                            @can('admin.cards.edit')
                                <a class="btn btn-primary"
                                    href="{{ route('admin.cards.edit', $card) }}">Editar</a>
                            @endcan
                        </td>

                        <td width="10px">
                            @can('admin.cards.destroy')

                                <form action="{{ route('admin.cards.destroy', $card) }}" method="POST">
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

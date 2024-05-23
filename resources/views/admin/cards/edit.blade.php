@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar tarjeta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($card, ['route' => ['admin.cards.update', $card], 'method' => 'put', 'files' => true]) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Titulo de la tarjeta') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripcion de la tarjeta') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
                </div>

                <div class="mb-3 row row-cols-1 row-cols-md-2">

                    <div class="col">
                        <div class="image-wrapper">

                            @if($card->getFirstMedia())
                                <img id="picture"
                                    src="{{ $card->getFirstMedia()->getUrl() }}" alt="">
                            @else
                                <img id="picture"
                                    src="https://images.pexels.com/photos/4497761/pexels-photo-4497761.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    alt="">
                            @endif
                        </div>
                    </div>

                    <div class="col">
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid aspernatur, architecto quidem ex
                            facilis ipsa cupiditate sit harum. Facilis sunt officia accusamus ipsa, animi eius perferendis aut
                            recusandae natus vitae.
                        </p>

                        <label class="btn btn-outline-info">
                            Subir imagen
                            {!! Form::file('file', ['class' => 'form-control-file', 'id' => 'file', 'hidden']) !!}
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-folder2-open" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z" />
                            </svg>
                        </label>
                        @error('file')
                            <small class="text-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>

                {{-- <div class="">
                    Vista previa
                    <div class="">
                        <img id="picture" src="https://images.pexels.com/photos/4497761/pexels-photo-4497761.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </div>
                </div> --}}

                {!! Form::submit('Actualizar tarjeta', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@stop

@section('js')
    <script src="{{ asset('js/cards/form.js') }}"></script>
@stop

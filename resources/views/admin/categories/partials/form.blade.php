<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug de la categoria') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug del producto', 'readonly']) !!}
    <div>
        @error('slug')
            <small class="text-sm text-danger">{{ $message }}</small>
        @enderror
    </div>

    <small class="text-sm text-secondary">Este es un campo automatico que se usa para una mejor experiencia de
        usuario</small>
</div>

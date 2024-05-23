<div x-data="{open:false}">

    @if ($social->username)
        @can('admin.socials.update')
            <button class="btn btn-info" x-on:click="open=!open">Actualizar</button>
        @endcan
    @else
        @can('admin.socials.store')
            <button class="btn btn-primary" x-on:click="open=!open">Agregar</button>
        @endcan
    @endif
    @if ($social->username)
        @can('admin.socials.destroy')
            <button wire:click="delete()" class="ml-1 btn btn-danger" type="submit">Eliminar</button>
        @endcan
    @endif

    <div x-show="open" class="flex items-center mt-2">
        {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => '@' . $platform, 'wire:model' => 'username']) !!}
        <button wire:click='save()' x-on:click="open = false" class="float-right mt-2 btn btn-success">Guardar</button>
    </div>
</div>

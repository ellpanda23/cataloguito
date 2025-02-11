<form class="relative mx-auto text-gray-600" autocomplete="off">
    <input wire:model="search" class="w-full h-12 px-5 pr-16 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none"
    type="search" name="search" placeholder="Buscar">

    <button type="submit" class="absolute top-0 right-0 h-12 btn btn-danger">
        Buscar
    </button>
    @if ($search)
        <ul class="absolute left-0 z-10 w-full mt-1 overflow-hidden bg-white rounded-lg">
            @forelse ($this->results as $result)
                <li class="px-5 text-sm leading-10 cursor-pointer hover:bg-gray-300">
                    <a href="{{route('product.show', $result)}}">{{$result->name}}</a>
                </li>
            @empty
                <li class="px-5 text-sm leading-10 cursor-pointer hover:bg-gray-300">
                    No hay ninguna coincidencia :(
                </li>
            @endforelse
        </ul>
    @else

    @endif

</form>

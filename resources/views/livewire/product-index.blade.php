<div>
    <div class="container px-6 mx-auto mt-8">
        <h3 class="text-2xl font-medium text-gray-700">Catalogo completo</h3>
        <span class="mt-3 text-sm text-gray-500">200+ Products</span>

        <div class="container py-4 mb-8 bg-gray-200 rounded-lg">

            <div class="font-semibold text-gray-600">Filtrar por:</div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="grid gap-4 md:grid-cols-3">
                    <button class="w-full h-12 px-4 mr-4 text-gray-700 bg-white rounded-lg shadow focus:outline-none" wire:click="resetFilters">
                        <i class="mr-px fas fa-list"></i>
                        Todos
                    </button>

                    <!-- Dropdown categorias -->
                    {!! Form::select('category_id', $categories, null, ['class' => 'w-full h-12 px-5 pr-16 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none', 'placeholder' => 'Categoria' , 'wire:model' => 'category']) !!}

                    <!-- Dropdown orderby -->
                    {!! Form::select('orderBy', ['desc' => 'Mas recientes', 'asc' => 'Menos recientes'], null, ['class' => 'w-full h-12 px-5 pr-16 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none', 'wire:model' => 'orderBy']) !!}
                </div>
                <div>
                    @livewire('search')
                </div>
            </div>


            </div>
        </div>

        <div class="container">
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
            <div class="my-4">
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>

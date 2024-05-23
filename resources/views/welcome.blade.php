<x-app-layout>

    <div class="container grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">

        @foreach ($cards as $card)

            <div class="@if ($loop->first) ? md:col-span-2 @endif
                col-span-1 overflow-hidden bg-center bg-cover rounded-md"
                style="background-image:
                url('{{ $card->getFirstMedia() ? $card->getFirstMedia()->getUrl() : 'https://images.pexels.com/photos/341523/pexels-photo-341523.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' }}')">
                <div class="flex items-center w-full h-64 bg-gray-900 bg-opacity-50">
                    <div class="max-w-xl px-10">
                        <h2 class="text-2xl font-semibold text-white">{{ $card->title }}</h2>
                        <p class="mt-2 text-gray-400">
                            {{ $card->description }}
                        </p>
                        {{-- <button class="flex items-center px-3 py-2 mt-4 text-sm text-white uppercase btn btn-primary">
                            <span>Ver más</span>
                            <svg class="w-5 h-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container">
        {{-- PRODUCTS --}}
        @if ($categories->count())
            @foreach ($categories as $category)
                @if ($category->products()->count())
                    @livewire('show-product', ['category' => $category], key('show-product-'.$category->id))
                @endif
            @endforeach

        @endif
    </div>

</x-app-layout>

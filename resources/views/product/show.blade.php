<x-app-layout>
    <div class="container">

        <div class="mt-10 card">

            <div class="md:flex md:items-center">

                <div class="w-full h-64 md:w-1/2 lg:h-96">
                    <img class="object-cover w-full h-full max-w-lg rounded-md shadow-md"
                        src="{{ $product->getFirstMedia() ? $product->getFirstMedia()->getUrl() : 'https://images.pexels.com/photos/821651/pexels-photo-821651.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' }}" alt="{{ $product->name }}">
                </div>

                <div class="w-full max-w-lg px-2 mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">

                    <h3 class="text-2xl text-gray-700 uppercase">{{ $product->name }}</h3>
                    <p class="text-gray-500">{{ $product->extract }}</p>
                    <span class="mt-3 font-bold text-gray-500">${{ $product->price }}</span>

                    <hr class="my-3">

                    <div class="text-base font-semibold text-gray-600">
                        {!! $product->description !!}
                    </div>

                    <div class="mt-1">
                        <span class="px-2 m-1 text-sm font-bold capitalize bg-gray-200 rounded-full cursor-pointer hover:bg-gray-300" >#{{$product->category->name}}</span>
                    </div>

                    <hr class="my-3">

                    <div class="mt-4">

                        <h2 class="mb-4 font-semibold text-gray-500">Ordena en:</h2>

                        <div class="flex justify-center text-sm uppercase">
                            @foreach ($socials as $social)
                                @if ($social->username)
                                    @switch($social->platform)
                                        @case('Facebook')
                                            <a href="https://facebook.com/{{ $social->username }}/"
                                                target="_blank" class="mr-4 btn btn-primary">
                                                <i class="text-white {{$social->icon}}"></i>
                                                {{ '@' . $social->username }}
                                            </a>
                                        @break
                                        @case('Instagram')
                                            <a href="https://instagram.com/{{ $social->username }}/"
                                                target="_blank" class="mr-4 btn btn-gradient">
                                                <i class="text-white {{$social->icon}}"></i>
                                                {{ '@' . $social->username }}
                                            </a>
                                        @break
                                        @case('WhatsApp')
                                            <a href="https://api.whatsapp.com/send?phone=52{{ $social->username }}"
                                                target="_blank" class="mr-4 btn btn-success">
                                                <i class="text-white {{$social->icon}}"></i>
                                                {{ $social->username }}
                                            </a>
                                        @break
                                        @default

                                    @endswitch
                                @else

                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    @if ($similares->count())

        <div class="container mt-16">
            <h3 class="text-2xl font-medium text-gray-600">Productos similares</h3>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($similares as $similar)
                    <x-product-card :product="$similar" />
                @endforeach
            </div>
        </div>

    @endif

    </div>
</x-app-layout>

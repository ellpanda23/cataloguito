@props(['product',])

<div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
    <div class="flex items-end justify-end w-full h-56 bg-cover" style="background-image: url('{{ $product->getFirstMedia() ? $product->getFirstMedia()->getUrl() : 'https://images.pexels.com/photos/821651/pexels-photo-821651.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' }}')">
        <span class="px-2 m-1 text-sm font-bold capitalize bg-gray-200 rounded-full cursor-pointer hover:bg-gray-300" >#{{$product->category->name}}</span>
        <a href="{{route('product.show', $product)}}" class="px-2 py-1 mx-5 -mb-4 text-white bg-blue-600 rounded-full hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
            <i class="fad fa-eye"></i>
        </a>
    </div>
    <div class="px-5 py-3">
        <h3 class="text-gray-700 uppercase">{{$product->name}}</h3>
        <div>
            <span class="text-sm text-gray-700">{{Str::limit($product->extract, 43)}}</span>
        </div>
        <div class="flex items-center">
            <a href="{{route('product.show', $product)}}" class="flex flex-1 text-gray-500 uppercase rounded hover:underline focus:outline-none">
                <span>Ver más</span>
                <svg class="w-5 h-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
            <span class="float-right pb-4 text-lg font-bold text-gray-500">${{$product->price}}</span>
        </div>
    </div>
</div>

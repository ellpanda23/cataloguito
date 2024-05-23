<div class="mt-16">
    <h3 class="text-2xl font-medium text-gray-600">{{$category->name}}</h3>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
    <div class="my-4">
        {{$products->links()}}
    </div>
</div>

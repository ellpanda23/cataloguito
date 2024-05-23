<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

use Livewire\WithPagination;

class ShowProduct extends Component
{
    use WithPagination;

    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $products = Product::where('category_id', $this->category->id)
                            ->paginate(4);

        return view('livewire.show-product', compact('products'));
    }
}

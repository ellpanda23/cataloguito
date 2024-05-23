<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $orderBy = 'desc', $category;

    public $categories;

    public function mount()
    {
        $this->categories = Category::pluck('name', 'id');
    }

    public function render()
    {
        $products = Product::orderBy('id', $this->orderBy)
                            ->category($this->category)
                            ->paginate(8);

        return view('livewire.product-index', compact('products'));
    }

    public function updatedCategory()
    {
        $this->reset(['page']);
    }

    public function resetFilters()
    {
        $this->reset(['category']);
    }
}

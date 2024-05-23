<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function render()
    {
        $products = Product::where('name', 'LIKE', '%'.$this->search.'%')
                            ->orwhere('extract', 'LIKE', '%'.$this->search.'%')
                            ->orwhere('price', 'LIKE', '%'.$this->search.'%')
                            ->paginate(8);

        return view('livewire.admin.products.product-index', compact('products'));
    }

    public function updatingSearch()
    {
        $this->reset('page');
    }

}

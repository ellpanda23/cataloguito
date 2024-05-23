<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty()
    {
        return Product::where('name', 'LIKE', '%' . $this->search . "%")
                        ->take(8)
                        ->get();
    }
}

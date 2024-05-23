<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $rules = [
        'name' => 'required',
        'slug' => 'reuired|unique:products',
        'extract' => 'required',
        'description' => 'required',
        'price' => 'number|required',
        'category_id' => 'required'
    ];

    public function __construct()
    {
        $this->middleware('can:admin.products.index')->only('index');
        $this->middleware('can:admin.products.create')->only('create', 'store');
        $this->middleware('can:admin.products.edit')->only('edit', 'update');
    }

    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {

        $categories = Category::pluck('name', 'id');

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'extract' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'file' => 'required'
        ]);

        $product = Product::create($request->all());

        $product->addMediaFromRequest('file')->toMediaCollection();

        return redirect()->route('admin.products.index')->with('info', 'El producto se creo correctamente');

    }

    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        if($request->file('file'))
        {
            $product->getFirstMedia()->delete();
            $product->addMediaFromRequest('file')->toMediaCollection();
        }
        $product->update($request->all());

        return redirect()->route('admin.products.edit', $product);

    }

    public function destroy(Product $product)
    {
        $product->delete();


        return redirect()->route('admin.products.index')->with('info', 'El producto se elimino correctamente');
    }
}

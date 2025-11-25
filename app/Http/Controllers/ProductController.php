<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // LIST (index)
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // CREATE (form)
    public function create()
    {
        return view('products.create');
    }

    // STORE (save)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        Product::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Product created.');
    }

    // EDIT (form)
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // UPDATE (save edit)
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Product updated.');
    }

    // DELETE
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('dashboard')->with('success', 'Product deleted.');
    }
}

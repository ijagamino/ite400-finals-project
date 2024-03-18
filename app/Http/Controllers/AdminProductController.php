<?php

namespace App\Http\Controllers;

use App\Models\Flavor;
use App\Models\Product;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all(),
            'flavors' => Flavor::all(),
        ]);
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    public function update(Product $product)
    {
        $attributes = request()->validate([
            'thumbnail' => ['image'],
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
        ]);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $product->update($attributes);

        return back()->with('success', 'Product updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('success', 'Product deleted');
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'thumbnail' => ['required', 'image'],
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
        ]);

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Product::create($attributes);

        return redirect('/admin')->with('success', 'Product added successfully.');
    }
}

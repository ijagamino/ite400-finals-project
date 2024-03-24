<?php

namespace App\Http\Controllers;

use App\Models\Flavor;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all(),
            'flavors' => Flavor::all(),
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'thumbnail' => ['required', 'image'],
            'name' => ['required', 'max:255'],
            'description' => ['required'],
            'price' => ['required'],
        ]);

        $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');

        Product::create($attributes);

        return redirect('/admin/products')->with('success', "{$attributes['name']} added successfully");
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $attributes = $request->validate([
            'thumbnail' => ['image'],
            'name' => ['required', 'max:255'],
            'description' => ['required'],
            'price' => ['required'],
        ]);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $product->update($attributes);

        return redirect('admin/products')->with('success', 'Product updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('success', "{$product->name} deleted");
    }
}

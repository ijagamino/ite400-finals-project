<?php

namespace App\Http\Controllers;

use App\Models\Flavor;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::all(),
            'flavors' => Flavor::get()->pluck('name', 'id'),
        ]);
    }

    public function search(Request $request)
    {

        return view('products.search', [
            'products' => Product::latest()->filter(request(['search']))->get(),
            'search' => $request->input('search'),
        ]);
    }
}

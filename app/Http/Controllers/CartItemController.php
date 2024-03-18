<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Flavor;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CartItemController extends Controller
{
    public function index()
    {
        return view('cart.index', [
            'cartItems' => CartItem::join('flavors', 'cart_item.flavor_id', 'flavors.id')
                ->join('products', 'cart_item.product_id', 'products.id')
                ->where('user_id', auth()->user()->id)
                ->select('cart_item.*', 'products.thumbnail', 'products.slug as product_slug', 'flavors.slug as flavor_slug', 'products.name as product_name', 'flavors.name as flavor_name')
                ->get(),
        ]);
    }

    public function store(Request $request)
    {

        $attributes = $request->all();

        $attributes['user_id'] = $request->user()->id;
        $attributes['price'] = Product::where('id', request('product_id'))->first()->price;

        $validator = Validator::make($attributes, [
            'user_id' => [
                'required',
                Rule::unique('cart_item')->where('product_id', $attributes['product_id'])->where('flavor_id', $attributes['flavor_id']),
            ],
            'product_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $attributes['user_id'])->where('flavor_id', $attributes['flavor_id']),
            ],
            'flavor_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $attributes['user_id'])->where('product_id', $attributes['product_id']),
            ],
            'layer' => ['required'],
            'quantity' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('menu')->with('fail', 'You already have that item in your cart.')
                ->withErrors($validator)
                ->withInput();
        }

        CartItem::create($attributes);

        return redirect('menu')->with('success', 'Product added to cart.');

    }

    public function add(Product $product, Flavor $flavor)
    {
        CartItem::where('product_id', $product->id)->where('flavor_id', $flavor->id)->increment('quantity');

        return back()->with('success', 'Quantity added.');
    }

    public function subtract(Product $product, Flavor $flavor)
    {
        CartItem::join('flavors', 'cart_item.flavor_id', 'flavors.id')->join('products', 'cart_item.product_id', 'products.id')->select('cart_item.*', 'flavors.slug as flavor_slug', 'products.slug as product_slug')->where('products.slug', $product->slug)->where('flavors.slug', $flavor->slug)->decrement('quantity');

        return back()->with('success', 'Quantity subtracted.');
    }

    public function destroy(Product $product, Flavor $flavor)
    {
        CartItem::join('flavors', 'cart_item.flavor_id', 'flavors.id')->join('products', 'cart_item.product_id', 'products.id')->select('cart_item.*', 'flavors.slug as flavor_slug', 'products.slug as product_slug')->where('products.slug', $product->slug)->where('flavors.slug', $flavor->slug)->delete();

        return back()->with('success', 'Product deleted');
    }
}

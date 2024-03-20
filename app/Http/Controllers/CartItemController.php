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
    public function index(Request $request)
    {
        $user = $request->user();

        return view('cart.index', [
            'cartItems' => $user->cartItems,
        ]);
    }

    public function store(Request $request)
    {

        $user = $request->user();
        $attributes = $request->all();

        $attributes['user_id'] = $user->id;

        $attributes['price'] = Product::where('id', request('product_id'))->first()->price;

        $validator = Validator::make($attributes, [
            'user_id' => [
                'required',
                Rule::unique('cart_item')->where('product_id', $attributes['product_id'])->where('flavor_id', $attributes['flavor_id'])->where('layers', $attributes['layers']),
            ],
            'product_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $attributes['user_id'])->where('flavor_id', $attributes['flavor_id'])->where('layers', $attributes['layers']),
            ],
            'flavor_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $attributes['user_id'])->where('product_id', $attributes['product_id'])->where('layers', $attributes['layers']),
            ],
            'layers' => ['required',
                Rule::unique('cart_item')->where('user_id', $attributes['user_id'])->where('product_id', $attributes['product_id'])->where('flavor_id', $attributes['flavor_id']),
            ],
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

    public function destroy(Product $product, Flavor $flavor)
    {
        CartItem::join('flavors', 'cart_item.flavor_id', 'flavors.id')->join('products', 'cart_item.product_id', 'products.id')->select('cart_item.*', 'flavors.slug as flavor_slug', 'products.slug as product_slug')->where('products.slug', $product->slug)->where('flavors.slug', $flavor->slug)->delete();

        return back()->with('success', 'Product deleted');
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
}

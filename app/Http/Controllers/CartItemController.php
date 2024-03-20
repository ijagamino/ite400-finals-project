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
            'flavors' => Flavor::get()->pluck('name', 'id'),
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
            'quantity' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            return redirect('menu')->with('fail', 'You already have that item in your cart')
                ->withErrors($validator)
                ->withInput();
        }

        CartItem::create($attributes);

        return redirect('menu')->with('success', 'Product added to cart');

    }

    public function update(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();
        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor)->first();

        $attributes = $request->except(['_token', '_method']);
        $attributes['user_id'] = $user->id;

        $validator = Validator::make($attributes, [
            'product_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $user->id)->where('flavor_id', $flavor->id)->ignore($cartItem->id),
            ],
            'flavor_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $user->id)->where('product_id', $product->id)->ignore($cartItem->id),
            ],
            'quantity' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            return back()->with('fail', 'You already have that item in your cart')
                ->withErrors($validator)
                ->withInput();
        }

        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor);

        $cartItem->update($attributes);

        return back()->with('success', 'Item updated');
    }

    public function destroy(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();

        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor);

        $cartItem->delete();

        return back()->with('success', 'Item removed from cart');
    }

    public function add(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();

        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor);

        $cartItem->increment('quantity');

        return back()->with('success', 'Item quantity added');
    }

    public function subtract(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();

        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor);

        if ($cartItem->first()->quantity == 1) {
            $cartItem->delete();

            return back()->with('success', 'Item removed from cart');
        }

        $cartItem->decrement('quantity');

        return back()->with('success', 'Item quantity subtracted');

    }
}

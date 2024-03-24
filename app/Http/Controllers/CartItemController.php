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

        $validator = Validator::make($attributes, [
            'user_id' => [
                'required',
                Rule::unique('cart_item')->where('product_id', $attributes['product_id'])->where('flavor_id', $attributes['flavor_id']),
            ],
            'product_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $user->id)->where('flavor_id', $attributes['flavor_id']),
            ],
            'flavor_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $user->id)->where('product_id', $attributes['product_id']),
            ],
            'quantity' => [
                'required',
                'numeric',
            ],
        ]);

        if ($validator->fails()) {
            return redirect('menu')->with('fail', 'You already have that item in your cart')
                ->withErrors($validator)
                ->withInput();
        }

        CartItem::create($attributes);

        return redirect('menu')->with('success', 'Item added to cart');
    }

    public function destroy(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();

        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor);

        $cartItem->delete();

        return back()->with('success', "{$product->name} removed from cart");
    }

    public function updateFlavor(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();
        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor)->first();
        $attributes = $request->except(['_token', '_method']);
        $requestFlavor = Flavor::where('id', $request->input('flavor_id'))->first()->name;

        $validator = Validator::make($attributes, [
            'flavor_id' => [
                'required',
                Rule::unique('cart_item')->where('user_id', $user->id)->where('product_id', $product->id)->ignore($cartItem->id),
            ],
        ]);

        if ($validator->fails()) {
            return back()->with('fail', "You already have {$product->name} {$requestFlavor} in your cart")
                ->withErrors($validator)
                ->withInput();
        }

        $cartItem->update(['flavor_id' => $request->input('flavor_id')]);

        return back()->with('success', "{$product->name} flavor changed to {$requestFlavor}");
    }

    public function updateQuantity(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();
        $attributes = $request->all();
        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor);

        $validator = Validator::make($attributes, [
            'quantity' => [
                'required',
                'numeric',
                'gte:0',
            ],
        ]);

        if ($validator->fails()) {
            return back()->with('fail', 'Quantity must be greater than zero (0)')
                ->withErrors($validator)
                ->withInput();
        }

        $cartItem->update(['quantity' => $attributes['quantity']]);

        return back()->with('success', "{$product->name} quantity changed to {$attributes['quantity']}");
    }

    public function incrementQuantity(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();
        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor)->first();

        $cartItem->increment('quantity');

        return back()->with('success', "{$product->name} quantity added");
    }

    public function decrementQuantity(Request $request, Product $product, Flavor $flavor)
    {
        $user = $request->user();
        $cartItem = $user->cartItems()->whereBelongsTo($product)->whereBelongsTo($flavor)->first();

        if ($cartItem->quantity == 1) {
            $cartItem->delete();

            return back()->with('success', "{$product->name} removed from cart");
        }

        $cartItem->decrement('quantity');

        return back()->with('success', "{$product->name} quantity subtracted");
    }
}

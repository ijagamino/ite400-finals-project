<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $attributes = $request->all();
        $attributes['user_id'] = $request->user()->id;

        $order = Order::create($attributes);
        $cartItem = CartItem::where('user_id', $request->user()->id);

        for ($i = 0; $i < $cartItem->count(); $i++) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $attributes['product_id'][$i],
                'flavor_id' => $attributes['flavor_id'][$i],
                'layer' => $attributes['layer'][$i],
                'quantity' => $attributes['quantity'][$i],
            ]);
        }

        $cartItem->delete();

        return redirect('/overview')->with('success', 'Order successful.');
    }
}
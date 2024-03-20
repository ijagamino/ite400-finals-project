<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $user = $request->user();
        $attributes = $request->all();

        $attributes['user_id'] = $user->id;
        $attributes['slug'] = Str::random();

        $order = Order::create($attributes);
        $cartItems = CartItem::where('user_id', $user->id);

        if (! $cartItems->count()) {
            return redirect('/menu')->with('success', 'You have not yet added anything to the cart');
        }
        for ($i = 0; $i < $cartItems->count(); $i++) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $attributes['product_id'][$i],
                'flavor_id' => $attributes['flavor_id'][$i],
                'layers' => $attributes['layers'][$i],
                'quantity' => $attributes['quantity'][$i],
            ]);
        }

        $cartItems->delete();

        return redirect('/orders/'.$order->slug)->with('success', 'Order placed.');
    }

    public function show(Order $order)
    {
        return view('orders.show', [
            'orderDetails' => $order->orderDetails,
        ]);
    }
}

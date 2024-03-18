<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->all();
        dd($attributes);

        OrderDetail::create([$attributes]);

        /* $attributes = $request->all();
        $attributes['user_id'] = $request->user()->id;

        dd($attributes);

        $attributes['price'] = Product::where('id', request('product_id'))->first()->price;

        $attributes = $request->validate([
            'user_id' => ['required'],
            'product_id' => ['required'],
            'flavor_id' => ['required'],
            'layer' => ['required'],
            'quantity' => ['required'],
        ]);

        Order::create($attributes);

        return redirect('/')->with('success', 'Order successful.'); */
    }
}

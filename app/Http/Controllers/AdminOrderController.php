<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index', [
            'orders' => Order::all(),
        ]);
    }

    public function update(Request $request, Order $order)
    {
        $order->update(['status' => 'ongoing']);

        return back()->with('success', 'Order is now out for delivery');
    }
}

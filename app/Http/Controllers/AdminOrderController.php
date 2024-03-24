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
        if ($order->status == 'pending') {
            $order->update(['status' => 'preparing']);

            return back()->with('success', 'Order is now being prepared');
        }
        if ($order->status == 'preparing') {
            $order->update(['status' => 'ongoing']);

            return back()->with('success', 'Order is now being prepared');
        }

        return back()->with('success', 'Order is now out for delivery');
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', [
            'order' => $order,
            'orderDetails' => $order->orderDetails,
        ]);
    }
}

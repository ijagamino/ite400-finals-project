<?php

namespace App\Http\Controllers;

use App\Models\Flavor;
use App\Models\Order;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'products' => Product::all(),
            'flavors' => Flavor::all(),
            'orders' => Order::all(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Flavor;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'user' => auth()->user(),
            'products' => Product::all(),
            'flavors' => Flavor::all(),
            'orders' => Order::all()->where('user_id', auth()->user()->id),
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You have successfully logged out.');
    }

    public function edit()
    {
        return view('user.edit', [
            'user' => auth()->user(),
        ]);
    }

    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'Your provided credentials could not be verified.',
            ]);
        }
        session()->regenerate();

        if (! auth()->user()->admin) {
            return redirect('/overview')->with('success', 'You have successfully logged in.');

        }

        return redirect('/admin')->with('success', 'You have successfully logged in.');

    }
}

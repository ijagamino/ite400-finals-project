<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        return view('user.index', [
            'user' => $user,
            'orders' => Order::whereBelongsTo($user)->latest()->get(),
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You have successfully logged out');
    }

    public function edit(Request $request)
    {
        $user = $request->user();

        return view('user.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $attributes = $request->validate([
            'street' => ['required', 'max:255'],
            'barangay' => ['required', 'max:255'],
            'city' => ['required', 'max:255'],
            'landmark' => ['required', 'max:255'],
            'mobile_number' => ['required', 'max:255'],
        ]);

        $user->update([
            $user->street = $attributes['street'],
            $user->barangay = $attributes['barangay'],
            $user->city = $attributes['city'],
            $user->landmark = $attributes['landmark'],
            $user->mobile_number = $attributes['mobile_number'],
        ]);

        return back()->with('success', 'Profile updated');
    }

    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'max:255'],
            'password' => ['required', 'min:6', 'max:255'],
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'Your provided credentials could not be verified',
            ]);
        }
        session()->regenerate();

        if (! auth()->user()->admin) {
            return redirect('/overview')->with('success', 'You have successfully logged in');
        }

        return redirect('/admin')->with('success', 'You have successfully logged in');

    }
}

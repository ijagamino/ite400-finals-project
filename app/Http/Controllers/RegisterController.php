<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'max:255', Rule::unique('users', 'username')],
            'password' => ['required', 'min:6', 'max:255'],
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'street' => ['required', 'max:255'],
            'barangay' => ['required', 'max:255'],
            'city' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'mobile_number' => ['required', 'max:255'],
        ]);

        $attributes['name'] = "{$attributes['first_name']} {$attributes['middle_name']} {$attributes['last_name']}";
        $attributes['address'] = "{$attributes['street']}, {$attributes['barangay']}, {$attributes['city']}";

        User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}

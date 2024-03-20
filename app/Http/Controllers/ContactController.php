<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['nullable', 'max:255'],
            'email' => ['email', 'nullable', 'max:255'],
            'message' => ['required'],
        ]);

        Contact::create($attributes);

        return redirect('/contact')->with('success', 'You have submitted a message');
    }
}

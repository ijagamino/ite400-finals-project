<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {
        return view('contacts.index', [
            'contacts' => Contact::all(),
        ]);
    }
}

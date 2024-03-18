<?php

namespace App\Http\Controllers;

use App\Models\Flavor;

class AdminFlavorController extends Controller
{
    public function index()
    {
        return view('admin.flavors.index', [
            'flavors' => Flavor::all(),
        ]);
    }
    //
}

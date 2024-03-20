<?php

namespace App\Http\Controllers;

use App\Models\Flavor;
use Illuminate\Http\Request;

class AdminFlavorController extends Controller
{
    public function index()
    {
        return view('admin.flavors.index', [
            'flavors' => Flavor::all(),
        ]);
    }

    public function create()
    {
        return view('admin.flavors.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:255'],
        ]);

        Flavor::create($attributes);

        return redirect('/admin')->with('success', 'Flavor added successfully');
    }

    public function edit(Flavor $flavor)
    {
        return view('admin.flavors.edit', [
            'flavor' => $flavor,
        ]);
    }

    public function update(Request $request, Flavor $flavor)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:255'],
        ]);

        $flavor->update($attributes);

        return redirect('admin/flavors')->with('success', 'Product updated');
    }

    public function destroy(Flavor $flavor)
    {
        $flavor->delete();

        return back()->with('success', 'Product deleted');
    }
}
